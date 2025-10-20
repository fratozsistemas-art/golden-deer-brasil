# 📧 Configuração de Email - Golden Deer Brasil

## Variáveis de Ambiente Necessárias

Para que o sistema de captura de leads funcione corretamente, você precisa configurar as seguintes variáveis de ambiente:

### 1. EMAIL_HOST
- **Descrição:** Servidor SMTP para envio de emails
- **Exemplos:**
  - Gmail: `smtp.gmail.com`
  - Outlook/Hotmail: `smtp-mail.outlook.com`
  - SendGrid: `smtp.sendgrid.net`
  - Amazon SES: `email-smtp.us-east-1.amazonaws.com`

### 2. EMAIL_PORT
- **Descrição:** Porta do servidor SMTP
- **Valores comuns:**
  - `587` - TLS (recomendado)
  - `465` - SSL
  - `25` - Não criptografado (não recomendado)

### 3. EMAIL_USER
- **Descrição:** Email de origem (remetente)
- **Exemplo:** `contato@goldendeer.com.br`

### 4. EMAIL_PASS
- **Descrição:** Senha ou token de autenticação
- **Para Gmail:** Use "Senha de App" (não a senha normal)
  - Acesse: https://myaccount.google.com/apppasswords
  - Gere uma senha de app específica para este projeto
- **Para outros:** Consulte a documentação do provedor

### 5. EMAIL_TO
- **Descrição:** Email de destino (onde os leads serão recebidos)
- **Exemplo:** `contato@goldendeer.com.br`

### 6. PORT (opcional)
- **Descrição:** Porta do servidor backend
- **Padrão:** `5000`

---

## 🔧 Como Configurar

### Opção 1: Gmail (Mais Comum)

1. **Ativar Verificação em 2 Etapas:**
   - Acesse: https://myaccount.google.com/security
   - Ative "Verificação em duas etapas"

2. **Gerar Senha de App:**
   - Acesse: https://myaccount.google.com/apppasswords
   - Selecione "Outro (nome personalizado)"
   - Digite: "Golden Deer Brasil Website"
   - Copie a senha gerada (16 caracteres)

3. **Configurar Variáveis:**
   ```
   EMAIL_HOST=smtp.gmail.com
   EMAIL_PORT=587
   EMAIL_USER=seu-email@gmail.com
   EMAIL_PASS=xxxx xxxx xxxx xxxx (senha de app gerada)
   EMAIL_TO=contato@goldendeer.com.br
   ```

### Opção 2: SendGrid (Recomendado para Produção)

1. **Criar Conta:**
   - Acesse: https://sendgrid.com
   - Plano gratuito: 100 emails/dia

2. **Gerar API Key:**
   - Settings → API Keys → Create API Key
   - Permissão: "Mail Send" (Full Access)

3. **Configurar Variáveis:**
   ```
   EMAIL_HOST=smtp.sendgrid.net
   EMAIL_PORT=587
   EMAIL_USER=apikey
   EMAIL_PASS=SG.xxxxxxxxxxxxxxxxxxxxxx (API key gerada)
   EMAIL_TO=contato@goldendeer.com.br
   ```

### Opção 3: Amazon SES (Para Alto Volume)

1. **Configurar SES:**
   - Console AWS → Amazon SES
   - Verificar domínio goldendeer.com.br
   - Criar credenciais SMTP

2. **Configurar Variáveis:**
   ```
   EMAIL_HOST=email-smtp.us-east-1.amazonaws.com
   EMAIL_PORT=587
   EMAIL_USER=AKIAXXXXXXXXXXXXXXXX
   EMAIL_PASS=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
   EMAIL_TO=contato@goldendeer.com.br
   ```

---

## 🚀 Testando a Configuração

### 1. Iniciar Backend:
```bash
cd /home/ubuntu/golden-deer-brasil-v2
pnpm dev:backend
```

### 2. Testar API:
```bash
curl -X POST http://localhost:5000/api/contact \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Teste",
    "email": "teste@example.com",
    "phone": "11999999999",
    "organization": "Empresa Teste",
    "portal": "general",
    "message": "Mensagem de teste"
  }'
```

### 3. Verificar Email:
- Cheque a caixa de entrada de `EMAIL_TO`
- Verifique também a pasta de spam

---

## 🔒 Segurança

### ✅ Boas Práticas:

1. **NUNCA** commite arquivos `.env` no Git
2. Use senhas de app específicas (não a senha principal)
3. Rotacione credenciais periodicamente
4. Use SendGrid/SES em produção (mais confiável que Gmail)
5. Configure SPF/DKIM no domínio para evitar spam

### ⚠️ Rate Limiting:

O sistema já possui proteção contra spam:
- Máximo 5 submissions por IP a cada 15 minutos
- Validação de dados no backend
- Sanitização de HTML nos emails

---

## 📊 Monitoramento

### Logs do Sistema:

O backend registra todos os eventos:
- ✅ Email enviado com sucesso
- ❌ Erro ao enviar email
- 📊 Lead capturado (nome, email, portal)

### Exemplo de Log:
```
✅ Email enviado com sucesso para contato@goldendeer.com.br
📊 Lead capturado: João Silva (joao@example.com) - Portal: Portal B2G (Governos)
```

---

## 🆘 Troubleshooting

### Erro: "Invalid login"
- **Causa:** Senha incorreta ou autenticação de 2 fatores não configurada
- **Solução:** Use senha de app (Gmail) ou API key (SendGrid)

### Erro: "Connection timeout"
- **Causa:** Firewall bloqueando porta SMTP
- **Solução:** Verifique firewall, tente porta 465 (SSL)

### Emails indo para spam
- **Causa:** Domínio não verificado ou sem SPF/DKIM
- **Solução:** Configure registros DNS do domínio

### Rate limit excedido
- **Causa:** Muitas tentativas em curto período
- **Solução:** Aguarde 15 minutos ou ajuste limite em `server/routes/contact.ts`

---

## 📞 Suporte

Para mais informações:
- **Gmail App Passwords:** https://support.google.com/accounts/answer/185833
- **SendGrid Docs:** https://docs.sendgrid.com
- **Nodemailer Docs:** https://nodemailer.com
- **Amazon SES:** https://docs.aws.amazon.com/ses/

---

## ✅ Checklist de Deploy

Antes de fazer deploy para produção:

- [ ] Variáveis de ambiente configuradas no servidor
- [ ] Email de teste enviado com sucesso
- [ ] SPF/DKIM configurados no domínio (opcional mas recomendado)
- [ ] Monitoramento de logs configurado
- [ ] Backup de credenciais em local seguro
- [ ] Integração com CRM planejada (futuro)

