import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Textarea } from "@/components/ui/textarea";
import { APP_LOGO, APP_TITLE, COMPANY_INFO } from "@/const";
import { Link } from "wouter";
import { ArrowLeft, Mail, Phone, MapPin, Send } from "lucide-react";
import { useState } from "react";
import { toast } from "sonner";
import Navigation from "@/components/Navigation";

export default function Contact() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    organization: "",
    portal: "general",
    message: "",
  });

  const [isSubmitting, setIsSubmitting] = useState(false);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitting(true);

    // Simulate form submission
    setTimeout(() => {
      toast.success("Mensagem enviada com sucesso! Entraremos em contato em breve.");
      setFormData({
        name: "",
        email: "",
        phone: "",
        organization: "",
        portal: "general",
        message: "",
      });
      setIsSubmitting(false);
    }, 1000);
  };

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  return (
    <div className="min-h-screen bg-gradient-to-b from-gray-50 to-white">
      <Navigation />

      {/* Hero */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl text-center">
          <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            Entre em Contato
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Descubra como podemos ajudar sua organização a transformar resíduos em recursos
          </p>
        </div>
      </section>

      {/* Contact Form & Info */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="grid md:grid-cols-3 gap-8">
            {/* Contact Form */}
            <div className="md:col-span-2">
              <Card>
                <CardHeader>
                  <CardTitle className="text-2xl">Solicite Informações</CardTitle>
                  <p className="text-sm text-gray-600">
                    Preencha o formulário abaixo e nossa equipe de especialistas entrará em contato em até 24 horas.
                  </p>
                </CardHeader>
                <CardContent>
                  <form onSubmit={handleSubmit} className="space-y-6">
                    <div className="grid md:grid-cols-2 gap-4">
                      <div>
                        <Label htmlFor="name">Nome *</Label>
                        <Input
                          id="name"
                          name="name"
                          value={formData.name}
                          onChange={handleChange}
                          required
                          className="mt-2"
                        />
                      </div>
                      <div>
                        <Label htmlFor="email">E-mail *</Label>
                        <Input
                          id="email"
                          name="email"
                          type="email"
                          value={formData.email}
                          onChange={handleChange}
                          required
                          className="mt-2"
                        />
                      </div>
                    </div>

                    <div className="grid md:grid-cols-2 gap-4">
                      <div>
                        <Label htmlFor="phone">Telefone</Label>
                        <Input
                          id="phone"
                          name="phone"
                          type="tel"
                          value={formData.phone}
                          onChange={handleChange}
                          className="mt-2"
                        />
                      </div>
                      <div>
                        <Label htmlFor="organization">Organização</Label>
                        <Input
                          id="organization"
                          name="organization"
                          value={formData.organization}
                          onChange={handleChange}
                          className="mt-2"
                        />
                      </div>
                    </div>

                    <div>
                      <Label htmlFor="portal">Tipo de Interesse</Label>
                      <select
                        id="portal"
                        name="portal"
                        value={formData.portal}
                        onChange={handleChange}
                        className="mt-2 w-full border border-gray-300 rounded-md px-3 py-2"
                      >
                        <option value="general">Informações Gerais</option>
                        <option value="b2g">Soluções B2G (Governos)</option>
                        <option value="b2b">Soluções B2B (Empresas)</option>
                        <option value="technology">Tecnologia</option>
                        <option value="partnership">Parceria Comercial</option>
                      </select>
                    </div>

                    <div>
                      <Label htmlFor="message">Mensagem *</Label>
                      <Textarea
                        id="message"
                        name="message"
                        value={formData.message}
                        onChange={handleChange}
                        required
                        rows={6}
                        className="mt-2"
                      />
                    </div>

                    <Button
                      type="submit"
                      size="lg"
                      className="w-full bg-green-700 hover:bg-green-800"
                      disabled={isSubmitting}
                    >
                      {isSubmitting ? (
                        "Enviando..."
                      ) : (
                        <>
                          <Send className="mr-2 w-4 h-4" />
                          Enviar Mensagem
                        </>
                      )}
                    </Button>
                  </form>
                </CardContent>
              </Card>
            </div>

            {/* Contact Info */}
            <div className="space-y-6">
              <Card>
                <CardHeader>
                  <CardTitle className="text-lg">Informações de Contato</CardTitle>
                </CardHeader>
                <CardContent className="space-y-4">
                  <div className="flex items-start gap-3">
                    <Mail className="w-5 h-5 text-green-700 mt-0.5" />
                    <div>
                      <p className="font-semibold text-sm">E-mail</p>
                      <p className="text-sm text-gray-600">{COMPANY_INFO.email}</p>
                      <p className="text-xs text-gray-500 mt-1">Resposta em até 4 horas</p>
                    </div>
                  </div>

                  <div className="flex items-start gap-3">
                    <Phone className="w-5 h-5 text-green-700 mt-0.5" />
                    <div>
                      <p className="font-semibold text-sm">Telefone</p>
                      <p className="text-sm text-gray-600">{COMPANY_INFO.phone}</p>
                      <p className="text-xs text-gray-500 mt-1">Segunda a Sexta: 9h às 18h</p>
                    </div>
                  </div>

                  <div className="flex items-start gap-3">
                    <MapPin className="w-5 h-5 text-green-700 mt-0.5" />
                    <div>
                      <p className="font-semibold text-sm">Escritório</p>
                      <p className="text-sm text-gray-600">São Paulo, SP, Brasil</p>
                      <p className="text-xs text-gray-500 mt-1">Atendimento presencial com agendamento</p>
                    </div>
                  </div>
                </CardContent>
              </Card>

              <Card>
                <CardHeader>
                  <CardTitle className="text-lg">Contatos Especializados</CardTitle>
                </CardHeader>
                <CardContent className="space-y-3">
                  <div>
                    <p className="font-semibold text-sm text-green-700">Soluções B2G</p>
                    <p className="text-xs text-gray-600">Governos e Municípios</p>
                  </div>
                  <div>
                    <p className="font-semibold text-sm text-blue-700">Soluções B2B</p>
                    <p className="text-xs text-gray-600">Empresas Privadas</p>
                  </div>
                  <div>
                    <p className="font-semibold text-sm text-gray-700">Parcerias</p>
                    <p className="text-xs text-gray-600">Representação Comercial</p>
                  </div>
                </CardContent>
              </Card>

              <Card className="bg-green-50 border-green-200">
                <CardHeader>
                  <CardTitle className="text-lg text-green-900">Ações Rápidas</CardTitle>
                </CardHeader>
                <CardContent className="space-y-2">
                  <Link href="/b2g">
                    <Button variant="outline" size="sm" className="w-full justify-start">
                      Portal B2G
                    </Button>
                  </Link>
                  <Link href="/b2b">
                    <Button variant="outline" size="sm" className="w-full justify-start">
                      Portal B2B
                    </Button>
                  </Link>
                  <Link href="/technology">
                    <Button variant="outline" size="sm" className="w-full justify-start">
                      Tecnologia
                    </Button>
                  </Link>
                </CardContent>
              </Card>
            </div>
          </div>
        </div>
      </section>

      {/* FAQ */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Perguntas Frequentes
            </h3>
            <p className="text-lg text-gray-600">
              Respostas às dúvidas mais comuns
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-6">
            <Card>
              <CardHeader>
                <CardTitle className="text-lg">Quanto tempo leva o processamento?</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Apenas 16 horas para processar completamente os resíduos orgânicos, versus 3-6 meses da compostagem tradicional.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="text-lg">A tecnologia gera odores?</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Não. O processo é 100% livre de odores pois ocorre em sistema completamente selado com controle de temperatura e aeração.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="text-lg">Qual o investimento necessário?</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  O investimento varia conforme a capacidade: R$ 267.000 por tonelada/dia de capacidade. Oferecemos modelos PPP para municípios e leasing para empresas.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="text-lg">Quanto tempo para retorno do investimento?</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  O payback típico é de 7-12 anos para empresas e 2-4 anos para municípios (PPP), considerando economia na destinação e receita com venda do fertilizante.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="text-lg">A tecnologia atende à PNRS?</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Sim, nossa solução atende integralmente à Política Nacional de Resíduos Sólidos (Lei 12.305/2010) e à Lei de Bioinsumos (Lei 15.070/2024).
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="text-lg">Quanto tempo para instalação?</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  De 4-6 meses desde aprovação do projeto até operação plena, incluindo licenciamento, instalação e testes.
                </p>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-900 text-white py-12 px-4">
        <div className="container mx-auto max-w-6xl text-center">
          <img src={APP_LOGO} alt={APP_TITLE} className="h-12 w-auto mx-auto mb-4 brightness-0 invert" />
          <p className="text-gray-400 text-sm mb-4">
            {COMPANY_INFO.tagline}
          </p>
          <div className="text-sm text-gray-500">
            © 2025 {APP_TITLE}. Todos os direitos reservados.
          </div>
        </div>
      </footer>
    </div>
  );
}

