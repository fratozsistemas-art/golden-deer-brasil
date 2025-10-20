import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { APP_LOGO, APP_TITLE, COMPANY_INFO, TECH_SPECS, MARKET_DATA } from "@/const";
import { Link } from "wouter";
import { Building2, Briefcase, ArrowRight, CheckCircle2, Globe, Zap } from "lucide-react";
import Navigation from "@/components/Navigation";

export default function Home() {
  return (
    <div className="min-h-screen bg-gradient-to-b from-green-50 to-white">
      <Navigation />

      {/* Hero Section */}
      <section className="py-20 px-4">
        <div className="container mx-auto text-center max-w-4xl">
          <div className="inline-block mb-4 px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
            🇨🇳 Tecnologia Comprovada em {TECH_SPECS.chinaInstallations} Instalações na China
          </div>
          <h2 className="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
            Transforme Resíduos Orgânicos em{" "}
            <span className="text-green-700">{TECH_SPECS.processingTime}</span>
          </h2>
          <p className="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            {COMPANY_INFO.description}. Tecnologia {TECH_SPECS.generation} de fermentação aeróbica microbiana.
          </p>
          
          {/* Key Stats */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 max-w-3xl mx-auto">
            <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
              <div className="text-3xl font-bold text-green-700">{TECH_SPECS.processingTime}</div>
              <div className="text-sm text-gray-600 mt-1">Tempo de Processamento</div>
            </div>
            <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
              <div className="text-3xl font-bold text-green-700">{TECH_SPECS.volumeReduction}</div>
              <div className="text-sm text-gray-600 mt-1">Redução de Volume</div>
            </div>
            <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
              <div className="text-3xl font-bold text-green-700">{MARKET_DATA.treatmentGap}</div>
              <div className="text-sm text-gray-600 mt-1">Resíduos Sem Tratamento</div>
            </div>
          </div>
        </div>
      </section>

      {/* Portal Selection */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Escolha Sua Jornada
            </h3>
            <p className="text-lg text-gray-600">
              Soluções especializadas para governos e empresas privadas
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            {/* B2G Portal Card */}
            <Card className="border-2 border-green-200 hover:border-green-400 transition-all hover:shadow-lg group cursor-pointer">
              <Link href="/b2g">
                <a className="block">
                  <CardHeader className="text-center pb-4">
                    <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center group-hover:bg-green-200 transition">
                      <Building2 className="w-8 h-8 text-green-700" />
                    </div>
                    <CardTitle className="text-2xl text-green-900">Portal B2G</CardTitle>
                    <CardDescription className="text-base">
                      Soluções para Governos
                    </CardDescription>
                  </CardHeader>
                  <CardContent className="space-y-3">
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Conformidade PNRS (Lei 12.305/2010)</span>
                    </div>
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Modelos PPP, BOT e Consórcio Municipal</span>
                    </div>
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Suporte BNDES, FINEP e IDB</span>
                    </div>
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Federal, Estadual e Municipal</span>
                    </div>
                    <div className="pt-4">
                      <Button className="w-full bg-green-700 hover:bg-green-800 group-hover:bg-green-800">
                        Acessar Portal B2G
                        <ArrowRight className="ml-2 w-4 h-4" />
                      </Button>
                    </div>
                  </CardContent>
                </a>
              </Link>
            </Card>

            {/* B2B Portal Card */}
            <Card className="border-2 border-blue-200 hover:border-blue-400 transition-all hover:shadow-lg group cursor-pointer">
              <Link href="/b2b">
                <a className="block">
                  <CardHeader className="text-center pb-4">
                    <div className="mx-auto mb-4 w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-200 transition">
                      <Briefcase className="w-8 h-8 text-blue-700" />
                    </div>
                    <CardTitle className="text-2xl text-blue-900">Portal B2B</CardTitle>
                    <CardDescription className="text-base">
                      Soluções para Empresas
                    </CardDescription>
                  </CardHeader>
                  <CardContent className="space-y-3">
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">ROI de 7-12 anos com economia imediata</span>
                    </div>
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Compliance ESG e ISO 14001</span>
                    </div>
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Leasing, Venda Direta ou Service Agreement</span>
                    </div>
                    <div className="flex items-start gap-2">
                      <CheckCircle2 className="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" />
                      <span className="text-sm text-gray-700">Aeroportos, Hotéis, Corporações, Agro</span>
                    </div>
                    <div className="pt-4">
                      <Button className="w-full bg-blue-700 hover:bg-blue-800 group-hover:bg-blue-800">
                        Acessar Portal B2B
                        <ArrowRight className="ml-2 w-4 h-4" />
                      </Button>
                    </div>
                  </CardContent>
                </a>
              </Link>
            </Card>
          </div>
        </div>
      </section>

      {/* Why Golden Deer */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Por Que Golden Deer Brasil?
            </h3>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            <div className="text-center">
              <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                <Globe className="w-8 h-8 text-green-700" />
              </div>
              <h4 className="text-xl font-semibold text-gray-900 mb-2">Tecnologia Comprovada</h4>
              <p className="text-gray-600">
                {TECH_SPECS.chinaInstallations} instalações operando com sucesso na China desde 2017
              </p>
            </div>

            <div className="text-center">
              <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                <CheckCircle2 className="w-8 h-8 text-green-700" />
              </div>
              <h4 className="text-xl font-semibold text-gray-900 mb-2">Conformidade Total</h4>
              <p className="text-gray-600">
                Atende PNRS, Lei de Bioinsumos e NDC Brasil (50% redução GEE até 2030)
              </p>
            </div>

            <div className="text-center">
              <div className="mx-auto mb-4 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                <Zap className="w-8 h-8 text-green-700" />
              </div>
              <h4 className="text-xl font-semibold text-gray-900 mb-2">Resultados Rápidos</h4>
              <p className="text-gray-600">
                Processamento em {TECH_SPECS.processingTime} vs 3-6 meses da compostagem tradicional
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-900 text-white py-12 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="grid md:grid-cols-3 gap-8">
            <div>
              <img src={APP_LOGO} alt={APP_TITLE} className="h-12 w-auto mb-4 brightness-0 invert" />
              <p className="text-gray-400 text-sm">
                {COMPANY_INFO.description}
              </p>
            </div>
            <div>
              <h5 className="font-semibold mb-4">Navegação</h5>
              <ul className="space-y-2 text-sm text-gray-400">
                <li><Link href="/b2g"><a className="hover:text-white transition">Portal B2G</a></Link></li>
                <li><Link href="/b2b"><a className="hover:text-white transition">Portal B2B</a></Link></li>
                <li><Link href="/technology"><a className="hover:text-white transition">Tecnologia</a></Link></li>
                <li><Link href="/contact"><a className="hover:text-white transition">Contato</a></Link></li>
              </ul>
            </div>
            <div>
              <h5 className="font-semibold mb-4">Contato</h5>
              <ul className="space-y-2 text-sm text-gray-400">
                <li>{COMPANY_INFO.email}</li>
                <li>{COMPANY_INFO.phone}</li>
                <li>São Paulo, SP, Brasil</li>
              </ul>
            </div>
          </div>
          <div className="mt-8 pt-8 border-t border-gray-800 text-center text-sm text-gray-500">
            © 2025 {APP_TITLE}. Todos os direitos reservados.
          </div>
        </div>
      </footer>
    </div>
  );
}

