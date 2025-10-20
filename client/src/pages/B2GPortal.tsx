import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { APP_LOGO, APP_TITLE } from "@/const";
import { Link } from "wouter";
import { ArrowLeft, Building2, MapPin, Users, FileText, Calculator, CheckCircle2 } from "lucide-react";
import Navigation from "@/components/Navigation";

export default function B2GPortal() {
  return (
    <div className="min-h-screen bg-gradient-to-b from-green-50 to-white">
      <Navigation />

      {/* Hero Section */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <div className="inline-block mb-4 px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
              🏛️ Soluções para Governos
            </div>
            <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
              Conformidade PNRS com <span className="text-green-700">Economia Real</span>
            </h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Atenda à Lei 12.305/2010 e transforme resíduos orgânicos em receita através de modelos PPP, BOT e Consórcio Municipal comprovadamente viáveis.
            </p>
          </div>

          {/* Key Benefits */}
          <div className="grid md:grid-cols-3 gap-6 mb-12">
            <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
              <div className="text-3xl font-bold text-green-700 mb-2">R$ 36M/ano</div>
              <div className="text-sm text-gray-600">Economia potencial (caso ABC Paulista, 1.000 tons/dia)</div>
            </div>
            <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
              <div className="text-3xl font-bold text-green-700 mb-2">5.570</div>
              <div className="text-sm text-gray-600">Municípios brasileiros precisam de conformidade PNRS</div>
            </div>
            <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
              <div className="text-3xl font-bold text-green-700 mb-2">50+</div>
              <div className="text-sm text-gray-600">Municípios atendidos na China com sucesso</div>
            </div>
          </div>
        </div>
      </section>

      {/* Government Segments */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Soluções por Nível de Governo
            </h3>
            <p className="text-lg text-gray-600">
              Modelos adaptados para cada esfera governamental
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            {/* Federal */}
            <Card className="border-2 border-green-200 hover:border-green-400 transition-all hover:shadow-lg">
              <CardHeader className="text-center">
                <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                  <Building2 className="w-8 h-8 text-green-700" />
                </div>
                <CardTitle className="text-xl">Governo Federal</CardTitle>
                <CardDescription>Ministérios e Autarquias</CardDescription>
              </CardHeader>
              <CardContent className="space-y-3">
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">MMA Showcase (Q1 2026)</span>
                </div>
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Demonstração de tecnologia</span>
                </div>
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Referência para estados e municípios</span>
                </div>
                <div className="pt-4">
                  <Link href="/contact">
                    <Button className="w-full bg-green-700 hover:bg-green-800">
                      Solicitar Apresentação
                    </Button>
                  </Link>
                </div>
              </CardContent>
            </Card>

            {/* State */}
            <Card className="border-2 border-green-200 hover:border-green-400 transition-all hover:shadow-lg">
              <CardHeader className="text-center">
                <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                  <MapPin className="w-8 h-8 text-green-700" />
                </div>
                <CardTitle className="text-xl">Governos Estaduais</CardTitle>
                <CardDescription>Secretarias de Meio Ambiente</CardDescription>
              </CardHeader>
              <CardContent className="space-y-3">
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Programas estaduais de resíduos</span>
                </div>
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Consórcios intermunicipais</span>
                </div>
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Apoio técnico aos municípios</span>
                </div>
                <div className="pt-4">
                  <Link href="/contact">
                    <Button className="w-full bg-green-700 hover:bg-green-800">
                      Solicitar Proposta
                    </Button>
                  </Link>
                </div>
              </CardContent>
            </Card>

            {/* Municipal */}
            <Card className="border-2 border-green-200 hover:border-green-400 transition-all hover:shadow-lg">
              <CardHeader className="text-center">
                <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                  <Users className="w-8 h-8 text-green-700" />
                </div>
                <CardTitle className="text-xl">Municípios</CardTitle>
                <CardDescription>5.570 municípios brasileiros</CardDescription>
              </CardHeader>
              <CardContent className="space-y-3">
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Conformidade PNRS imediata</span>
                </div>
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Modelos PPP e BOT</span>
                </div>
                <div className="flex items-start gap-2">
                  <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                  <span className="text-sm">Consórcio municipal</span>
                </div>
                <div className="pt-4">
                  <Link href="/contact">
                    <Button className="w-full bg-green-700 hover:bg-green-800">
                      Calcular Viabilidade
                    </Button>
                  </Link>
                </div>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Business Models */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Modelos de Negócio
            </h3>
            <p className="text-lg text-gray-600">
              Escolha o modelo mais adequado para seu município
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            <Card>
              <CardHeader>
                <CardTitle>PPP Clássico</CardTitle>
                <CardDescription>Parceria Público-Privada</CardDescription>
              </CardHeader>
              <CardContent className="space-y-2">
                <div className="text-sm"><strong>Duração:</strong> 20-30 anos</div>
                <div className="text-sm"><strong>Investimento:</strong> 100% privado</div>
                <div className="text-sm"><strong>Operação:</strong> Parceiro privado</div>
                <div className="text-sm"><strong>Receita:</strong> Tarifa de processamento + fertilizante</div>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle>BOT</CardTitle>
                <CardDescription>Build-Operate-Transfer</CardDescription>
              </CardHeader>
              <CardContent className="space-y-2">
                <div className="text-sm"><strong>Duração:</strong> 15-20 anos</div>
                <div className="text-sm"><strong>Investimento:</strong> Privado com transferência</div>
                <div className="text-sm"><strong>Operação:</strong> Privado até transferência</div>
                <div className="text-sm"><strong>Transferência:</strong> Ao município após período</div>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle>Consórcio Municipal</CardTitle>
                <CardDescription>Múltiplos Municípios</CardDescription>
              </CardHeader>
              <CardContent className="space-y-2">
                <div className="text-sm"><strong>Duração:</strong> Variável</div>
                <div className="text-sm"><strong>Investimento:</strong> Compartilhado</div>
                <div className="text-sm"><strong>Operação:</strong> Consórcio ou terceirizada</div>
                <div className="text-sm"><strong>Economia:</strong> Escala compartilhada</div>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Regulatory Compliance */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Conformidade Regulatória
            </h3>
            <p className="text-lg text-gray-600">
              Atende a toda legislação brasileira de resíduos sólidos
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-6">
            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <FileText className="w-6 h-6 text-green-700" />
                  <div>
                    <CardTitle>PNRS - Lei 12.305/2010</CardTitle>
                    <CardDescription>Política Nacional de Resíduos Sólidos</CardDescription>
                  </div>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Nossa tecnologia atende integralmente aos requisitos da PNRS, permitindo que municípios desviem resíduos orgânicos de aterros sanitários e cumpram as metas de reciclagem.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <FileText className="w-6 h-6 text-green-700" />
                  <div>
                    <CardTitle>Lei 15.070/2024</CardTitle>
                    <CardDescription>Lei de Bioinsumos</CardDescription>
                  </div>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Isenta compostagem on-site para uso próprio de registro MAPA, simplificando drasticamente a implementação e operação do sistema.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <FileText className="w-6 h-6 text-green-700" />
                  <div>
                    <CardTitle>NDC Brasil</CardTitle>
                    <CardDescription>Acordo de Paris</CardDescription>
                  </div>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Contribui diretamente para a meta brasileira de 50% de redução de GEE até 2030, através da redução de emissões de metano de aterros sanitários.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <FileText className="w-6 h-6 text-green-700" />
                  <div>
                    <CardTitle>ISO 14001</CardTitle>
                    <CardDescription>Gestão Ambiental</CardDescription>
                  </div>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Sistema compatível com ISO 14001, facilitando certificação ambiental de municípios e órgãos governamentais.
                </p>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-4xl">
          <Card className="bg-gradient-to-r from-green-700 to-green-600 border-0 text-white">
            <CardContent className="p-12 text-center">
              <h3 className="text-3xl font-bold mb-4">
                Pronto para Transformar Seu Município?
              </h3>
              <p className="text-lg mb-8 text-green-50">
                Solicite uma proposta personalizada e descubra como podemos ajudar seu município a alcançar conformidade PNRS com economia real.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Link href="/contact">
                  <Button size="lg" variant="secondary" className="bg-white text-green-700 hover:bg-green-50">
                    <Calculator className="mr-2 w-5 h-5" />
                    Calcular Viabilidade
                  </Button>
                </Link>
                <Link href="/contact">
                  <Button size="lg" variant="outline" className="border-white text-white hover:bg-green-800">
                    Solicitar Proposta
                  </Button>
                </Link>
              </div>
            </CardContent>
          </Card>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-900 text-white py-12 px-4">
        <div className="container mx-auto max-w-6xl text-center">
          <img src={APP_LOGO} alt={APP_TITLE} className="h-12 w-auto mx-auto mb-4 brightness-0 invert" />
          <p className="text-gray-400 text-sm mb-4">
            Portal B2G - Soluções para Governos
          </p>
          <div className="text-sm text-gray-500">
            © 2025 {APP_TITLE}. Todos os direitos reservados.
          </div>
        </div>
      </footer>
    </div>
  );
}

