import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { APP_LOGO, APP_TITLE } from "@/const";
import { Link } from "wouter";
import { ArrowLeft, Zap, Droplet, Thermometer, Wind, Leaf, BarChart3 } from "lucide-react";
import Navigation from "@/components/Navigation";

export default function Technology() {
  return (
    <div className="min-h-screen bg-gradient-to-b from-gray-50 to-white">
      <Navigation />

      {/* Hero */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl text-center">
          <div className="inline-block mb-4 px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
            🧬 8ª Geração de Tecnologia Microbiana
          </div>
          <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            Fermentação Aeróbica <span className="text-green-700">Avançada</span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Tecnologia proprietária desenvolvida pela Shanghai Jielu Biotechnology, 
            com consórcio microbiano otimizado através de 8 gerações de pesquisa científica desde 2011.
          </p>
        </div>
      </section>

      {/* Tech Specs */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <Card>
              <CardHeader>
                <Zap className="w-8 h-8 text-green-700 mb-2" />
                <CardTitle className="text-2xl">16 horas</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Tempo de processamento completo vs. 3-6 meses da compostagem tradicional (99% mais rápido)
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <BarChart3 className="w-8 h-8 text-green-700 mb-2" />
                <CardTitle className="text-2xl">80-90%</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Redução de volume: 1 tonelada de resíduos gera 100-200 kg de fertilizante premium
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <Droplet className="w-8 h-8 text-green-700 mb-2" />
                <CardTitle className="text-2xl">100%</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Livre de odores: sistema fechado com degradação microbiana de compostos voláteis
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <Leaf className="w-8 h-8 text-green-700 mb-2" />
                <CardTitle className="text-2xl">0.5-1</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  kWh/kg de consumo energético (aeração e controle de temperatura)
                </p>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Process */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Processo de 16 Horas
            </h3>
            <p className="text-lg text-gray-600">
              4 etapas otimizadas para máxima eficiência
            </p>
          </div>

          <div className="grid md:grid-cols-4 gap-6">
            <Card className="text-center">
              <CardHeader>
                <div className="mx-auto w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                  <span className="text-2xl font-bold text-green-700">1</span>
                </div>
                <CardTitle className="text-lg">Entrada de Material</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Resíduos orgânicos são triturados e homogeneizados para processamento uniforme
                </p>
              </CardContent>
            </Card>

            <Card className="text-center">
              <CardHeader>
                <div className="mx-auto w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                  <span className="text-2xl font-bold text-green-700">2</span>
                </div>
                <CardTitle className="text-lg">Inoculação</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Adição das cepas microbianas proprietárias (8ª geração) otimizadas
                </p>
              </CardContent>
            </Card>

            <Card className="text-center">
              <CardHeader>
                <div className="mx-auto w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                  <span className="text-2xl font-bold text-green-700">3</span>
                </div>
                <CardTitle className="text-lg">Fermentação</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Processo aeróbico controlado por 16 horas a 55-65°C com aeração precisa
                </p>
              </CardContent>
            </Card>

            <Card className="text-center">
              <CardHeader>
                <div className="mx-auto w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                  <span className="text-2xl font-bold text-green-700">4</span>
                </div>
                <CardTitle className="text-lg">Produto Final</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Fertilizante orgânico estabilizado (NPK 1.5-2.5%) ou ração animal (após processamento adicional)
                </p>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Key Features */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Características Técnicas
            </h3>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <Thermometer className="w-6 h-6 text-green-700" />
                  <CardTitle>Controle de Temperatura</CardTitle>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600 mb-3">
                  Sistema automatizado mantém condições ideais (55-65°C) para máxima eficiência microbiana e eliminação de patógenos.
                </p>
                <ul className="text-sm text-gray-600 space-y-1">
                  <li>• Sensores em tempo real</li>
                  <li>• Ajuste automático de temperatura</li>
                  <li>• 99.9% eliminação de patógenos</li>
                </ul>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <Wind className="w-6 h-6 text-green-700" />
                  <CardTitle>Aeração Controlada</CardTitle>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600 mb-3">
                  Fornecimento preciso de oxigênio otimiza o processo aeróbico e garante degradação completa da matéria orgânica.
                </p>
                <ul className="text-sm text-gray-600 space-y-1">
                  <li>• Sistema de aeração inteligente</li>
                  <li>• Controle de fluxo de ar</li>
                  <li>• Eficiência energética otimizada</li>
                </ul>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <Droplet className="w-6 h-6 text-green-700" />
                  <CardTitle>Microbiologia Proprietária</CardTitle>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600 mb-3">
                  Cepas microbianas selecionadas e otimizadas especificamente para resíduos orgânicos brasileiros através de 8 gerações de desenvolvimento.
                </p>
                <ul className="text-sm text-gray-600 space-y-1">
                  <li>• Consórcio microbiano proprietário</li>
                  <li>• Adaptado ao clima tropical</li>
                  <li>• Proteção de propriedade intelectual</li>
                </ul>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <div className="flex items-center gap-3">
                  <Zap className="w-6 h-6 text-green-700" />
                  <CardTitle>Monitoramento IoT</CardTitle>
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600 mb-3">
                  Sensores em tempo real garantem condições ótimas continuamente e permitem monitoramento remoto 24/7.
                </p>
                <ul className="text-sm text-gray-600 space-y-1">
                  <li>• Dashboard em tempo real</li>
                  <li>• Alertas automáticos</li>
                  <li>• Relatórios de performance</li>
                </ul>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Equipment Models */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Modelos de Equipamentos
            </h3>
            <p className="text-lg text-gray-600">
              Soluções escaláveis de 50 kg/dia a 100 tons/dia
            </p>
          </div>

          <div className="overflow-x-auto">
            <table className="w-full border-collapse">
              <thead>
                <tr className="bg-green-50">
                  <th className="border border-green-200 p-3 text-left">Modelo</th>
                  <th className="border border-green-200 p-3 text-left">Capacidade</th>
                  <th className="border border-green-200 p-3 text-left">Aplicação</th>
                  <th className="border border-green-200 p-3 text-left">Investimento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td className="border border-gray-200 p-3 font-semibold">JL-50</td>
                  <td className="border border-gray-200 p-3">50 kg/dia</td>
                  <td className="border border-gray-200 p-3">Restaurantes pequenos</td>
                  <td className="border border-gray-200 p-3">R$ 89.000</td>
                </tr>
                <tr className="bg-gray-50">
                  <td className="border border-gray-200 p-3 font-semibold">JL-100</td>
                  <td className="border border-gray-200 p-3">100 kg/dia</td>
                  <td className="border border-gray-200 p-3">Cafeterias, escritórios</td>
                  <td className="border border-gray-200 p-3">R$ 178.000</td>
                </tr>
                <tr>
                  <td className="border border-gray-200 p-3 font-semibold">JL-500</td>
                  <td className="border border-gray-200 p-3">500 kg/dia</td>
                  <td className="border border-gray-200 p-3">Hotéis grandes</td>
                  <td className="border border-gray-200 p-3">R$ 890.000</td>
                </tr>
                <tr className="bg-gray-50">
                  <td className="border border-gray-200 p-3 font-semibold">JL-1000</td>
                  <td className="border border-gray-200 p-3">1 ton/dia</td>
                  <td className="border border-gray-200 p-3">Hospitais, shoppings</td>
                  <td className="border border-gray-200 p-3">R$ 1.780.000</td>
                </tr>
                <tr>
                  <td className="border border-gray-200 p-3 font-semibold">JL-2000</td>
                  <td className="border border-gray-200 p-3">2 tons/dia</td>
                  <td className="border border-gray-200 p-3">Aeroportos</td>
                  <td className="border border-gray-200 p-3">R$ 3.560.000</td>
                </tr>
                <tr className="bg-gray-50">
                  <td className="border border-gray-200 p-3 font-semibold">JL-10</td>
                  <td className="border border-gray-200 p-3">10 tons/dia</td>
                  <td className="border border-gray-200 p-3">Municípios pequenos</td>
                  <td className="border border-gray-200 p-3">R$ 17.800.000</td>
                </tr>
                <tr>
                  <td className="border border-gray-200 p-3 font-semibold">JL-100</td>
                  <td className="border border-gray-200 p-3">100 tons/dia</td>
                  <td className="border border-gray-200 p-3">Municípios grandes</td>
                  <td className="border border-gray-200 p-3">R$ 178.000.000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      {/* Track Record */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Tecnologia Comprovada
            </h3>
            <p className="text-lg text-gray-600">
              300+ instalações operando com sucesso na China desde 2017
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            <Card>
              <CardHeader>
                <CardTitle>Sinopec</CardTitle>
                <p className="text-sm text-gray-600">Complexo Industrial - 5 tons/dia</p>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  40% de redução de custos operacionais, conformidade ISO 14001 mantida, zero reclamações de odor.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle>Baowu Steel</CardTitle>
                <p className="text-sm text-gray-600">Sede Corporativa - 1 ton/dia</p>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  90% de redução de resíduos, satisfação dos funcionários aumentada, operação zero odor.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle>Dongjing Town</CardTitle>
                <p className="text-sm text-gray-600">Governo Municipal - 20 tons/dia</p>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  8 instalações servindo 100.000+ residentes, conformidade ambiental total, receita com fertilizante.
                </p>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle>Shanghai Municipality</CardTitle>
                <p className="text-sm text-gray-600">Mercado Municipal - 18 tons/dia</p>
              </CardHeader>
              <CardContent>
                <p className="text-sm text-gray-600">
                  Operação 24/7, zero reclamações, modelo replicado em 46+ municípios chineses.
                </p>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-4xl text-center">
          <h3 className="text-3xl font-bold text-gray-900 mb-4">
            Interessado em Nossa Tecnologia?
          </h3>
          <p className="text-lg text-gray-600 mb-8">
            Descubra como nossa solução pode resolver os desafios de resíduos orgânicos da sua organização
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Link href="/b2g">
              <Button size="lg" className="bg-green-700 hover:bg-green-800">
                Portal B2G
              </Button>
            </Link>
            <Link href="/b2b">
              <Button size="lg" className="bg-blue-700 hover:bg-blue-800">
                Portal B2B
              </Button>
            </Link>
            <Link href="/contact">
              <Button size="lg" variant="outline">
                Contato
              </Button>
            </Link>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-900 text-white py-12 px-4">
        <div className="container mx-auto max-w-6xl text-center">
          <img src={APP_LOGO} alt={APP_TITLE} className="h-12 w-auto mx-auto mb-4 brightness-0 invert" />
          <div className="text-sm text-gray-500">
            © 2025 {APP_TITLE}. Todos os direitos reservados.
          </div>
        </div>
      </footer>
    </div>
  );
}

