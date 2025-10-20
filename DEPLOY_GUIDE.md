# 🚀 Guia de Deploy - Golden Deer Brasil v2.0

## 📋 Visão Geral

Este guia cobre **3 opções de deploy** para o website Golden Deer Brasil:

1. **Vercel** (Recomendado) - Deploy automático com CI/CD
2. **Railway** - Alternativa com backend Node.js incluído
3. **Hostinger** - Usando o domínio goldendeer.com.br existente

---

## ✅ Pré-requisitos

- [x] Build de produção gerado (`pnpm build`)
- [x] Repositório GitHub: `https://github.com/fratozsistemas-art/golden-deer-brasil`
- [x] Token GitHub configurado (não incluir no repositório)
- [x] Domínio: `goldendeer.com.br` (configurado na Hostinger)
- [x] Backend API implementado com Express + Nodemailer

---

## 🎯 Opção 1: Deploy no Vercel (RECOMENDADO)

### Por que Vercel?
- ✅ Deploy automático via GitHub
- ✅ HTTPS gratuito
- ✅ CDN global
- ✅ Suporte a Serverless Functions (backend)
- ✅ Configuração de domínio customizado fácil
- ✅ Rollback com um clique

### Passo a Passo

#### 1. Preparar Projeto para Vercel

Criar arquivo `vercel.json`:

```json
{
  "version": 2,
  "builds": [
    {
      "src": "dist/public/**",
      "use": "@vercel/static"
    },
    {
      "src": "server/index.ts",
      "use": "@vercel/node"
    }
  ],
  "routes": [
    {
      "src": "/api/(.*)",
      "dest": "server/index.ts"
    },
    {
      "src": "/(.*)",
      "dest": "/dist/public/$1"
    }
  ],
  "env": {
    "NODE_ENV": "production"
  }
}
```

#### 2. Fazer Deploy

**Via CLI:**
```bash
# Instalar Vercel CLI
npm i -g vercel

# Login
vercel login

# Deploy
cd /home/ubuntu/golden-deer-brasil-v2
vercel --prod
```

**Via Dashboard Web:**
1. Acesse: https://vercel.com
2. Clique em "New Project"
3. Conecte com GitHub
4. Selecione repositório: `fratozsistemas-art/golden-deer-brasil`
5. Configure:
   - **Framework Preset:** Vite
   - **Build Command:** `pnpm build`
   - **Output Directory:** `dist/public`
6. Adicione variáveis de ambiente (ver seção abaixo)
7. Clique em "Deploy"

#### 3. Configurar Variáveis de Ambiente

No dashboard Vercel → Settings → Environment Variables:

```
EMAIL_HOST=smtp.gmail.com
EMAIL_PORT=587
EMAIL_USER=seu-email@gmail.com
EMAIL_PASS=sua-senha-de-app
EMAIL_TO=contato@goldendeer.com.br
PORT=5000
NODE_ENV=production
```

#### 4. Configurar Domínio Customizado

1. Vercel Dashboard → Settings → Domains
2. Adicionar: `goldendeer.com.br`
3. Vercel fornecerá registros DNS
4. No painel Hostinger → DNS:
   - Tipo: `CNAME`
   - Nome: `@`
   - Valor: `cname.vercel-dns.com`
5. Aguardar propagação (até 48h, geralmente 1-2h)

---

## 🚂 Opção 2: Deploy no Railway

### Por que Railway?
- ✅ Suporte nativo a Node.js + Express
- ✅ Deploy via GitHub
- ✅ Banco de dados PostgreSQL incluído (futuro)
- ✅ Logs em tempo real
- ✅ Escalabilidade automática

### Passo a Passo

#### 1. Preparar Projeto

Arquivo `railway.json` já existe no projeto.

#### 2. Deploy

**Via Dashboard:**
1. Acesse: https://railway.app
2. Login com GitHub
3. "New Project" → "Deploy from GitHub repo"
4. Selecione: `fratozsistemas-art/golden-deer-brasil`
5. Railway detectará automaticamente Node.js
6. Configure variáveis de ambiente (mesmas do Vercel)
7. Deploy automático iniciará

**Via CLI:**
```bash
# Instalar Railway CLI
npm i -g @railway/cli

# Login
railway login

# Link projeto
cd /home/ubuntu/golden-deer-brasil-v2
railway link

# Deploy
railway up
```

#### 3. Configurar Domínio

1. Railway Dashboard → Settings → Domains
2. Adicionar domínio customizado: `goldendeer.com.br`
3. Configurar DNS na Hostinger (Railway fornecerá instruções)

---

## 🏠 Opção 3: Deploy na Hostinger (Domínio Existente)

### Limitações
- ⚠️ Hostinger usa Apache/PHP, não Node.js nativo
- ⚠️ Backend Express requer VPS ou conversão para PHP
- ⚠️ Recomendado apenas se você tiver VPS na Hostinger

### Opção 3A: VPS Hostinger (Node.js)

Se você tem VPS com SSH:

```bash
# 1. Conectar via SSH
ssh usuario@goldendeer.com.br

# 2. Instalar Node.js
curl -fsSL https://deb.nodesource.com/setup_22.x | sudo -E bash -
sudo apt-get install -y nodejs

# 3. Clonar repositório
git clone https://github.com/fratozsistemas-art/golden-deer-brasil.git
cd golden-deer-brasil

# 4. Instalar dependências
npm install -g pnpm
pnpm install

# 5. Configurar variáveis de ambiente
nano .env
# (adicionar EMAIL_HOST, EMAIL_USER, etc.)

# 6. Build
pnpm build

# 7. Instalar PM2 (process manager)
npm install -g pm2

# 8. Iniciar aplicação
pm2 start dist/index.js --name golden-deer
pm2 save
pm2 startup

# 9. Configurar Nginx como reverse proxy
sudo nano /etc/nginx/sites-available/goldendeer.com.br
```

Configuração Nginx:
```nginx
server {
    listen 80;
    server_name goldendeer.com.br www.goldendeer.com.br;

    location / {
        proxy_pass http://localhost:5000;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_set_header Host $host;
        proxy_cache_bypass $http_upgrade;
    }
}
```

```bash
# Ativar site
sudo ln -s /etc/nginx/sites-available/goldendeer.com.br /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx

# Configurar SSL (HTTPS)
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d goldendeer.com.br -d www.goldendeer.com.br
```

### Opção 3B: Hospedagem Compartilhada (Sem Node.js)

Se você tem apenas hospedagem compartilhada PHP:

**Solução:** Use Vercel/Railway para backend + Hostinger apenas para redirecionamento

1. Deploy no Vercel (opção 1)
2. Na Hostinger, crie arquivo `.htaccess`:

```apache
RewriteEngine On
RewriteRule ^(.*)$ https://seu-projeto.vercel.app/$1 [R=301,L]
```

Ou configure DNS para apontar diretamente para Vercel.

---

## 🔧 Configuração de Email (Todas as Opções)

### Gmail (Desenvolvimento/Pequeno Volume)

1. Ativar autenticação de 2 fatores
2. Gerar senha de app: https://myaccount.google.com/apppasswords
3. Configurar variáveis:
   ```
   EMAIL_HOST=smtp.gmail.com
   EMAIL_PORT=587
   EMAIL_USER=seu-email@gmail.com
   EMAIL_PASS=xxxx xxxx xxxx xxxx
   EMAIL_TO=contato@goldendeer.com.br
   ```

### SendGrid (Produção - Recomendado)

1. Criar conta: https://sendgrid.com (100 emails/dia grátis)
2. Gerar API Key
3. Configurar:
   ```
   EMAIL_HOST=smtp.sendgrid.net
   EMAIL_PORT=587
   EMAIL_USER=apikey
   EMAIL_PASS=SG.xxxxxxxxxxxxxx
   EMAIL_TO=contato@goldendeer.com.br
   ```

### Amazon SES (Alto Volume)

1. Configurar SES na AWS Console
2. Verificar domínio goldendeer.com.br
3. Criar credenciais SMTP
4. Configurar variáveis (ver EMAIL_SETUP.md)

---

## 📊 Monitoramento Pós-Deploy

### 1. Verificar Funcionamento

```bash
# Health check
curl https://goldendeer.com.br/api/health

# Testar formulário
curl -X POST https://goldendeer.com.br/api/contact \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Teste",
    "email": "teste@example.com",
    "phone": "11999999999",
    "organization": "Empresa Teste",
    "portal": "general",
    "message": "Mensagem de teste do sistema"
  }'
```

### 2. Configurar Google Analytics (Opcional)

Adicionar no `<head>` do `index.html`:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX');
</script>
```

### 3. Logs e Debugging

**Vercel:**
- Dashboard → Logs
- Real-time logs via CLI: `vercel logs`

**Railway:**
- Dashboard → Deployments → View Logs

**VPS:**
```bash
pm2 logs golden-deer
pm2 monit
```

---

## 🔄 Atualizações Futuras

### Deploy Automático (CI/CD)

Ambos Vercel e Railway fazem deploy automático quando você faz push para GitHub:

```bash
# Fazer alterações
git add .
git commit -m "Atualização do website"
git push origin main

# Deploy automático será iniciado
```

### Rollback

**Vercel:**
- Dashboard → Deployments → Selecione versão anterior → "Promote to Production"

**Railway:**
- Dashboard → Deployments → Selecione versão → "Redeploy"

---

## ✅ Checklist Final

Antes de considerar o deploy completo:

- [ ] Build de produção gerado sem erros
- [ ] Variáveis de ambiente configuradas
- [ ] Email de teste enviado com sucesso
- [ ] Todas as páginas acessíveis (Home, B2G, B2B, Tecnologia, Contato)
- [ ] Formulário de contato funcionando
- [ ] FAQ carregando corretamente
- [ ] Calculadora ROI operacional (Portal B2B)
- [ ] Case studies visíveis (Portal B2G)
- [ ] Trust bar na homepage
- [ ] Logo Golden Deer carregando
- [ ] Responsivo em mobile/tablet/desktop
- [ ] HTTPS configurado
- [ ] Domínio goldendeer.com.br apontando corretamente
- [ ] Google Analytics configurado (opcional)
- [ ] Backup do código no GitHub

---

## 🆘 Troubleshooting

### Erro: "Cannot find module"
```bash
# Reinstalar dependências
rm -rf node_modules pnpm-lock.yaml
pnpm install
pnpm build
```

### Erro: "Port already in use"
```bash
# Matar processo na porta 5000
lsof -ti:5000 | xargs kill -9
```

### Email não está sendo enviado
1. Verificar variáveis de ambiente
2. Testar credenciais SMTP localmente
3. Verificar logs do servidor
4. Confirmar que não está em pasta de spam

### Domínio não resolve
1. Verificar propagação DNS: https://dnschecker.org
2. Aguardar até 48h para propagação completa
3. Limpar cache DNS local: `ipconfig /flushdns` (Windows) ou `sudo dscacheutil -flushcache` (Mac)

---

## 📞 Suporte

Para questões técnicas:
- **Vercel Docs:** https://vercel.com/docs
- **Railway Docs:** https://docs.railway.app
- **Hostinger Support:** https://www.hostinger.com.br/suporte

Para questões sobre o código:
- **GitHub Issues:** https://github.com/fratozsistemas-art/golden-deer-brasil/issues

---

## 🎉 Conclusão

**Recomendação Final:** Use **Vercel** para melhor experiência de deploy, performance e facilidade de manutenção.

Após o deploy, o website estará acessível em:
- **Produção:** https://goldendeer.com.br
- **Preview (Vercel):** https://golden-deer-brasil.vercel.app

Boa sorte com o lançamento! 🚀🦌

