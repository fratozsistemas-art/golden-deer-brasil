# Sistema de Leads - Instruções de Configuração

## 📧 Integração com Formspree (Recomendado)

O formulário de contato está configurado para usar **Formspree**, um serviço gratuito que processa formulários e envia emails.

### Passo 1: Criar Conta Formspree

1. Acesse: https://formspree.io
2. Crie uma conta gratuita (permite 50 submissions/mês)
3. Clique em "New Form"
4. Nome do form: "Golden Deer Brasil - Contato"
5. Email de destino: contato@goldendeer.com.br

### Passo 2: Obter Form ID

Após criar o form, você receberá um **Form ID** no formato: `xyzabc123`

### Passo 3: Configurar no Website

Edite o arquivo: `client/src/pages/Contact.tsx`

Linha 31, substitua:
```typescript
const response = await fetch('https://formspree.io/f/YOUR_FORM_ID', {
```

Por:
```typescript
const response = await fetch('https://formspree.io/f/xyzabc123', {
```

### Passo 4: Testar

1. Faça rebuild: `pnpm build`
2. Teste o formulário no website
3. Verifique se recebeu email em contato@goldendeer.com.br

---

## 🔄 Alternativa: EmailJS

Se preferir usar EmailJS (também gratuito):

### Setup EmailJS

1. Acesse: https://www.emailjs.com
2. Crie conta gratuita (200 emails/mês)
3. Configure email service (Gmail, Outlook, etc.)
4. Crie email template
5. Obtenha: Service ID, Template ID, Public Key

### Código para EmailJS

Instale a biblioteca:
```bash
pnpm add @emailjs/browser
```

Substitua `handleSubmit` em `Contact.tsx`:
```typescript
import emailjs from '@emailjs/browser';

const handleSubmit = async (e: React.FormEvent) => {
  e.preventDefault();
  setIsSubmitting(true);

  try {
    await emailjs.send(
      'YOUR_SERVICE_ID',
      'YOUR_TEMPLATE_ID',
      {
        from_name: formData.name,
        from_email: formData.email,
        phone: formData.phone,
        organization: formData.organization,
        portal: formData.portal,
        message: formData.message,
      },
      'YOUR_PUBLIC_KEY'
    );

    toast.success("Mensagem enviada com sucesso!");
    setFormData({ name: "", email: "", phone: "", organization: "", portal: "general", message: "" });
  } catch (error) {
    toast.error("Erro ao enviar mensagem.");
  } finally {
    setIsSubmitting(false);
  }
};
```

---

## 🚀 Alternativa Avançada: Backend Próprio

Para controle total, crie um backend Node.js/Express:

### 1. Criar API Route

Arquivo: `server/routes/contact.ts`
```typescript
import express from 'express';
import nodemailer from 'nodemailer';

const router = express.Router();

router.post('/api/contact', async (req, res) => {
  const { name, email, phone, organization, portal, message } = req.body;

  // Configure nodemailer
  const transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 587,
    secure: false,
    auth: {
      user: process.env.EMAIL_USER,
      pass: process.env.EMAIL_PASS,
    },
  });

  // Send email
  await transporter.sendMail({
    from: process.env.EMAIL_USER,
    to: 'contato@goldendeer.com.br',
    subject: `Novo contato - ${portal}`,
    html: `
      <h2>Novo Contato - Golden Deer Brasil</h2>
      <p><strong>Nome:</strong> ${name}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Telefone:</strong> ${phone}</p>
      <p><strong>Organização:</strong> ${organization}</p>
      <p><strong>Portal:</strong> ${portal}</p>
      <p><strong>Mensagem:</strong></p>
      <p>${message}</p>
    `,
  });

  // Save to database (optional)
  // await db.leads.create({ name, email, phone, organization, portal, message });

  res.json({ success: true });
});

export default router;
```

### 2. Atualizar Frontend

```typescript
const response = await fetch('/api/contact', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify(formData),
});
```

---

## 📊 Rastreamento de Leads

### Google Analytics 4

Adicione tracking de conversão no `handleSubmit`:

```typescript
// Após sucesso no envio
if (typeof window.gtag !== 'undefined') {
  window.gtag('event', 'generate_lead', {
    event_category: 'Lead Generation',
    event_label: formData.portal,
    value: 1,
  });
}
```

### Facebook Pixel

```typescript
if (typeof window.fbq !== 'undefined') {
  window.fbq('track', 'Lead', {
    content_name: formData.portal,
    content_category: 'Contact Form',
  });
}
```

---

## ✅ Checklist de Implementação

### Imediato (Hoje)
- [ ] Criar conta Formspree
- [ ] Obter Form ID
- [ ] Substituir `YOUR_FORM_ID` em Contact.tsx
- [ ] Testar formulário

### Esta Semana
- [ ] Configurar autoresponder (email automático para quem envia)
- [ ] Criar template de email profissional
- [ ] Adicionar Google Analytics tracking

### Próximo Mês
- [ ] Integrar com CRM (HubSpot/Salesforce)
- [ ] Criar dashboard de leads
- [ ] Implementar lead scoring

---

## 🎯 Recomendação

**Para lançamento imediato:** Use **Formspree** (5 minutos de setup, gratuito, confiável)

**Para crescimento:** Migre para backend próprio com database quando atingir 50+ leads/mês

**Para escala:** Integre com CRM profissional (HubSpot, Salesforce) quando atingir 200+ leads/mês

---

## 📞 Suporte

Se precisar de ajuda com a configuração, consulte:
- Formspree Docs: https://help.formspree.io
- EmailJS Docs: https://www.emailjs.com/docs
- Nodemailer Docs: https://nodemailer.com

