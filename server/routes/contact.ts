import express, { Request, Response } from "express";
import nodemailer from "nodemailer";
import rateLimit from "express-rate-limit";

const router = express.Router();

// Rate limiting: máximo 5 submissions por IP a cada 15 minutos
const contactLimiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutos
  max: 5, // limite de 5 requests
  message: {
    success: false,
    error: "Muitas tentativas. Por favor, aguarde 15 minutos antes de tentar novamente.",
  },
  standardHeaders: true,
  legacyHeaders: false,
});

// Interface para dados do formulário
interface ContactFormData {
  name: string;
  email: string;
  phone: string;
  organization: string;
  portal: string;
  message: string;
}

// Validação de email
function isValidEmail(email: string): boolean {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Validação de dados do formulário
function validateFormData(data: ContactFormData): { valid: boolean; error?: string } {
  if (!data.name || data.name.trim().length < 2) {
    return { valid: false, error: "Nome deve ter pelo menos 2 caracteres" };
  }

  if (!data.email || !isValidEmail(data.email)) {
    return { valid: false, error: "Email inválido" };
  }

  if (!data.message || data.message.trim().length < 10) {
    return { valid: false, error: "Mensagem deve ter pelo menos 10 caracteres" };
  }

  if (!["general", "b2g", "b2b"].includes(data.portal)) {
    return { valid: false, error: "Portal inválido" };
  }

  return { valid: true };
}

// Função para criar transporter do Nodemailer
function createEmailTransporter() {
  // Verifica se as variáveis de ambiente estão configuradas
  const emailUser = process.env.EMAIL_USER;
  const emailPass = process.env.EMAIL_PASS;
  const emailHost = process.env.EMAIL_HOST || "smtp.gmail.com";
  const emailPort = parseInt(process.env.EMAIL_PORT || "587");

  if (!emailUser || !emailPass) {
    console.warn("⚠️ EMAIL_USER ou EMAIL_PASS não configurados. Emails não serão enviados.");
    return null;
  }

  return nodemailer.createTransport({
    host: emailHost,
    port: emailPort,
    secure: emailPort === 465, // true para porta 465, false para outras portas
    auth: {
      user: emailUser,
      pass: emailPass,
    },
  });
}

// Função para formatar nome do portal
function getPortalName(portal: string): string {
  const portalNames: Record<string, string> = {
    general: "Geral",
    b2g: "Portal B2G (Governos)",
    b2b: "Portal B2B (Empresas)",
  };
  return portalNames[portal] || "Geral";
}

// Rota POST /api/contact
router.post("/api/contact", contactLimiter, async (req: Request, res: Response) => {
  try {
    const formData: ContactFormData = req.body;

    // Validar dados
    const validation = validateFormData(formData);
    if (!validation.valid) {
      return res.status(400).json({
        success: false,
        error: validation.error,
      });
    }

    // Criar transporter
    const transporter = createEmailTransporter();

    if (!transporter) {
      // Se não houver configuração de email, apenas loga os dados
      console.log("📧 Novo contato recebido (email não configurado):");
      console.log(JSON.stringify(formData, null, 2));

      return res.status(200).json({
        success: true,
        message: "Mensagem recebida com sucesso! Entraremos em contato em breve.",
        note: "Email service not configured - data logged to console",
      });
    }

    // Preparar email
    const portalName = getPortalName(formData.portal);
    const emailHtml = `
      <!DOCTYPE html>
      <html>
      <head>
        <style>
          body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 600px; margin: 0 auto; padding: 20px; }
          .header { background: linear-gradient(135deg, #2F5233 0%, #1a2f1d 100%); color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
          .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 8px 8px; }
          .field { margin-bottom: 15px; }
          .label { font-weight: bold; color: #2F5233; }
          .value { margin-top: 5px; padding: 10px; background: white; border-left: 3px solid #D4AF37; }
          .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
        </style>
      </head>
      <body>
        <div class="container">
          <div class="header">
            <h1>🦌 Golden Deer Brasil</h1>
            <p>Novo Contato Recebido</p>
          </div>
          <div class="content">
            <div class="field">
              <div class="label">Portal de Origem:</div>
              <div class="value">${portalName}</div>
            </div>
            <div class="field">
              <div class="label">Nome:</div>
              <div class="value">${formData.name}</div>
            </div>
            <div class="field">
              <div class="label">Email:</div>
              <div class="value"><a href="mailto:${formData.email}">${formData.email}</a></div>
            </div>
            ${formData.phone ? `
            <div class="field">
              <div class="label">Telefone:</div>
              <div class="value">${formData.phone}</div>
            </div>
            ` : ''}
            ${formData.organization ? `
            <div class="field">
              <div class="label">Organização:</div>
              <div class="value">${formData.organization}</div>
            </div>
            ` : ''}
            <div class="field">
              <div class="label">Mensagem:</div>
              <div class="value">${formData.message.replace(/\n/g, '<br>')}</div>
            </div>
          </div>
          <div class="footer">
            <p>Este email foi enviado automaticamente pelo sistema de contato do website Golden Deer Brasil.</p>
            <p>Data: ${new Date().toLocaleString('pt-BR', { timeZone: 'America/Sao_Paulo' })}</p>
          </div>
        </div>
      </body>
      </html>
    `;

    // Enviar email
    const mailOptions = {
      from: `"Golden Deer Brasil - Website" <${process.env.EMAIL_USER}>`,
      to: process.env.EMAIL_TO || "contato@goldendeer.com.br",
      subject: `Novo Contato - ${portalName} - ${formData.name}`,
      html: emailHtml,
      replyTo: formData.email,
    };

    await transporter.sendMail(mailOptions);

    // Log para monitoramento
    console.log(`✅ Email enviado com sucesso para ${mailOptions.to}`);
    console.log(`📊 Lead capturado: ${formData.name} (${formData.email}) - Portal: ${portalName}`);

    // TODO: Salvar no banco de dados quando implementado
    // await db.leads.create({
    //   name: formData.name,
    //   email: formData.email,
    //   phone: formData.phone,
    //   organization: formData.organization,
    //   portal: formData.portal,
    //   message: formData.message,
    //   created_at: new Date(),
    // });

    // Resposta de sucesso
    return res.status(200).json({
      success: true,
      message: "Mensagem enviada com sucesso! Entraremos em contato em breve.",
    });

  } catch (error) {
    console.error("❌ Erro ao processar contato:", error);
    
    return res.status(500).json({
      success: false,
      error: "Erro ao enviar mensagem. Por favor, tente novamente mais tarde.",
    });
  }
});

// Rota GET para health check
router.get("/api/health", (_req: Request, res: Response) => {
  res.json({
    status: "ok",
    service: "Golden Deer Brasil - Contact API",
    timestamp: new Date().toISOString(),
  });
});

export default router;

