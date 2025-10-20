import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { APP_LOGO, APP_TITLE } from "@/const";
import { Link } from "wouter";
import { ArrowLeft, Briefcase, Plane, Hotel, Utensils, Building, Wheat, Calculator, TrendingUp, Leaf } from "lucide-react";
import { useState } from "react";
import Navigation from "@/components/Navigation";

export default function B2BPortal() {
  const [wasteVolume, setWasteVolume] = useState(1);
  const [disposalCost, setDisposalCost] = useState(200);
  const [transportDistance, setTransportDistance] = useState(20);

  // ROI Calculation
  const annualWaste = wasteVolume * 365;
  const currentDisposalCost = annualWaste * disposalCost;
  const transportCost = annualWaste * transportDistance * 2 * 0.5;
  const currentTotalCost = currentDisposalCost + transportCost;
  
  const equipmentCost = wasteVolume * 118000 * 5; // USD 118k/ton/day * 5 BRL/USD
  const operatingCost = equipmentCost * 0.20;
  const fertilizerRevenue = annualWaste * 0.15 * 100;
  
  const annualSavings = currentTotalCost - operatingCost + fertilizerRevenue;
  const paybackYears = equipmentCost / annualSavings;
  const co2Reduction = annualWaste * 0.5;

  const segments = [
    {
      id: "airports",
      title: "Aeroportos",
      icon: Plane,
      dailyVolume: "20 tons/dia",
      equipment: "JL-50 a JL-100",
      examples: ["BSB", "GRU", "Galeão"],
      color: "blue",
    },
    {
      id: "hotels",
      title: "Hotéis",
      icon: Hotel,
      dailyVolume: "0.5-2 tons/dia",
      equipment: "JL-10 a JL-50",
      examples: ["Marriott", "Hilton", "Accor"],
      color: "purple",
    },
    {
      id: "restaurants",
      title: "Restaurantes",
      icon: Utensils,
      dailyVolume: "0.3-1 ton/dia",
      equipment: "JL-05 a JL-20",
      examples: ["Cadeias", "Food Courts"],
      color: "orange",
    },
    {
      id: "corporate",
      title: "Corporações",
      icon: Building,
      dailyVolume: "2-5 tons/dia",
      equipment: "JL-50 a JL-100",
      examples: ["Escritórios", "Universidades"],
      color: "indigo",
    },
    {
      id: "agro",
      title: "Agro/Agroindustrial",
      icon: Wheat,
      dailyVolume: "10-100+ tons/dia",
      equipment: "JL-100 a JL-500+",
      examples: ["JBS", "BRF", "Suzano"],
      color: "green",
    },
  ];

  return (
    <div className="min-h-screen bg-gradient-to-b from-blue-50 to-white">
      <Navigation />

      {/* Hero Section */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <div className="inline-block mb-4 px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
              💼 Soluções para Empresas
            </div>
            <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
              Transforme Resíduos em <span className="text-blue-700">Economia ESG</span>
            </h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              ROI de 7-12 anos com redução imediata de custos, compliance ESG e contribuição para metas de sustentabilidade corporativa.
            </p>
          </div>

          {/* Key Benefits */}
          <div className="grid md:grid-cols-3 gap-6 mb-12">
            <div className="bg-white p-6 rounded-lg shadow-sm border border-blue-100">
              <div className="flex items-center gap-3 mb-2">
                <TrendingUp className="w-6 h-6 text-blue-700" />
                <div className="text-2xl font-bold text-blue-700">27-71%</div>
              </div>
              <div className="text-sm text-gray-600">Redução de custos vs. aterro sanitário</div>
            </div>
            <div className="bg-white p-6 rounded-lg shadow-sm border border-blue-100">
              <div className="flex items-center gap-3 mb-2">
                <Calculator className="w-6 h-6 text-blue-700" />
                <div className="text-2xl font-bold text-blue-700">7-12 anos</div>
              </div>
              <div className="text-sm text-gray-600">Payback típico com economia imediata</div>
            </div>
            <div className="bg-white p-6 rounded-lg shadow-sm border border-blue-100">
              <div className="flex items-center gap-3 mb-2">
                <Leaf className="w-6 h-6 text-blue-700" />
                <div className="text-2xl font-bold text-blue-700">80%</div>
              </div>
              <div className="text-sm text-gray-600">Redução de CO₂ vs. aterro</div>
            </div>
          </div>
        </div>
      </section>

      {/* ROI Calculator */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-4xl">
          <div className="text-center mb-8">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Calculadora ROI Interativa
            </h3>
            <p className="text-lg text-gray-600">
              Calcule a viabilidade financeira para sua empresa
            </p>
          </div>

          <Card className="border-2 border-blue-200">
            <CardHeader className="bg-blue-50">
              <CardTitle className="flex items-center gap-2">
                <Calculator className="w-5 h-5" />
                Parâmetros da Sua Operação
              </CardTitle>
            </CardHeader>
            <CardContent className="p-6">
              <div className="grid md:grid-cols-3 gap-6 mb-8">
                <div>
                  <Label htmlFor="wasteVolume">Volume de Resíduos (tons/dia)</Label>
                  <Input
                    id="wasteVolume"
                    type="number"
                    min="0.1"
                    step="0.1"
                    value={wasteVolume}
                    onChange={(e) => setWasteVolume(parseFloat(e.target.value) || 0)}
                    className="mt-2"
                  />
                </div>
                <div>
                  <Label htmlFor="disposalCost">Custo Atual de Descarte (R$/ton)</Label>
                  <Input
                    id="disposalCost"
                    type="number"
                    min="0"
                    step="10"
                    value={disposalCost}
                    onChange={(e) => setDisposalCost(parseFloat(e.target.value) || 0)}
                    className="mt-2"
                  />
                </div>
                <div>
                  <Label htmlFor="transportDistance">Distância de Transporte (km)</Label>
                  <Input
                    id="transportDistance"
                    type="number"
                    min="0"
                    step="5"
                    value={transportDistance}
                    onChange={(e) => setTransportDistance(parseFloat(e.target.value) || 0)}
                    className="mt-2"
                  />
                </div>
              </div>

              <div className="border-t pt-6">
                <h4 className="font-semibold text-lg mb-4">Resultados da Análise</h4>
                <div className="grid md:grid-cols-2 gap-6">
                  <div className="space-y-3">
                    <div className="flex justify-between">
                      <span className="text-gray-600">Resíduos Anuais:</span>
                      <span className="font-semibold">{annualWaste.toFixed(0)} tons</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-gray-600">Custo Atual Total:</span>
                      <span className="font-semibold">R$ {currentTotalCost.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})}</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-gray-600">Investimento Equipamento:</span>
                      <span className="font-semibold">R$ {equipmentCost.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})}</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-gray-600">Custo Operacional Anual:</span>
                      <span className="font-semibold">R$ {operatingCost.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})}</span>
                    </div>
                  </div>
                  <div className="space-y-3">
                    <div className="flex justify-between">
                      <span className="text-gray-600">Receita Fertilizante:</span>
                      <span className="font-semibold text-green-600">+R$ {fertilizerRevenue.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})}</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-gray-600">Economia Anual:</span>
                      <span className="font-semibold text-green-600">R$ {annualSavings.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})}</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-gray-600">Payback:</span>
                      <span className="font-semibold text-blue-600">{paybackYears.toFixed(1)} anos</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-gray-600">Redução CO₂:</span>
                      <span className="font-semibold text-green-600">{co2Reduction.toFixed(0)} tons/ano</span>
                    </div>
                  </div>
                </div>

                <div className="mt-6 p-4 bg-blue-50 rounded-lg">
                  <p className="text-sm text-blue-900">
                    <strong>Conclusão:</strong> Com um investimento de R$ {equipmentCost.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})}, 
                    sua empresa economiza R$ {annualSavings.toLocaleString('pt-BR', {minimumFractionDigits: 0, maximumFractionDigits: 0})} por ano, 
                    com payback em {paybackYears.toFixed(1)} anos e redução de {co2Reduction.toFixed(0)} toneladas de CO₂ anualmente.
                  </p>
                </div>

                <div className="mt-6 flex gap-4">
                  <Link href="/contact">
                    <Button className="bg-blue-700 hover:bg-blue-800">
                      Solicitar Orçamento Detalhado
                    </Button>
                  </Link>
                  <Link href="/contact">
                    <Button variant="outline">
                      Agendar Demonstração
                    </Button>
                  </Link>
                </div>
              </div>
            </CardContent>
          </Card>
        </div>
      </section>

      {/* Business Segments */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Segmentos Atendidos
            </h3>
            <p className="text-lg text-gray-600">
              Soluções especializadas para cada tipo de negócio
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {segments.map((segment) => {
              const Icon = segment.icon;
              return (
                <Card key={segment.id} className="hover:shadow-lg transition-all">
                  <CardHeader>
                    <div className="flex items-center gap-3 mb-2">
                      <div className={`w-12 h-12 bg-${segment.color}-100 rounded-full flex items-center justify-center`}>
                        <Icon className={`w-6 h-6 text-${segment.color}-700`} />
                      </div>
                      <div>
                        <CardTitle className="text-lg">{segment.title}</CardTitle>
                        <CardDescription className="text-xs">{segment.dailyVolume}</CardDescription>
                      </div>
                    </div>
                  </CardHeader>
                  <CardContent>
                    <div className="space-y-2 mb-4">
                      <div className="text-sm"><strong>Equipamento:</strong> {segment.equipment}</div>
                      <div className="text-sm"><strong>Exemplos:</strong> {segment.examples.join(", ")}</div>
                    </div>
                    <Link href="/contact">
                      <Button variant="outline" size="sm" className="w-full">
                        Saiba Mais
                      </Button>
                    </Link>
                  </CardContent>
                </Card>
              );
            })}
          </div>
        </div>
      </section>

      {/* Business Models */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-900 mb-4">
              Modelos de Negócio
            </h3>
            <p className="text-lg text-gray-600">
              Escolha o modelo mais adequado para sua empresa
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            <Card>
              <CardHeader>
                <CardTitle>Venda Direta</CardTitle>
                <CardDescription>Aquisição de Equipamento</CardDescription>
              </CardHeader>
              <CardContent className="space-y-2">
                <div className="text-sm"><strong>Payback:</strong> 7-12 anos</div>
                <div className="text-sm"><strong>Investimento:</strong> Cliente (CAPEX)</div>
                <div className="text-sm"><strong>Propriedade:</strong> Total do cliente</div>
                <div className="text-sm"><strong>Manutenção:</strong> Contrato O&M opcional</div>
              </CardContent>
            </Card>

            <Card className="border-2 border-blue-200">
              <CardHeader>
                <div className="inline-block mb-2 px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">
                  Mais Popular
                </div>
                <CardTitle>Leasing</CardTitle>
                <CardDescription>Aluguel Operacional</CardDescription>
              </CardHeader>
              <CardContent className="space-y-2">
                <div className="text-sm"><strong>Payback:</strong> Imediato</div>
                <div className="text-sm"><strong>Investimento:</strong> Zero CAPEX</div>
                <div className="text-sm"><strong>Pagamento:</strong> Mensal fixo</div>
                <div className="text-sm"><strong>Manutenção:</strong> Incluída</div>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle>Service Agreement</CardTitle>
                <CardDescription>Serviço Completo</CardDescription>
              </CardHeader>
              <CardContent className="space-y-2">
                <div className="text-sm"><strong>Payback:</strong> Imediato</div>
                <div className="text-sm"><strong>Investimento:</strong> Zero CAPEX</div>
                <div className="text-sm"><strong>Pagamento:</strong> Por tonelada processada</div>
                <div className="text-sm"><strong>Operação:</strong> Completa pela Golden Deer</div>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-16 px-4">
        <div className="container mx-auto max-w-4xl">
          <Card className="bg-gradient-to-r from-blue-700 to-blue-600 border-0 text-white">
            <CardContent className="p-12 text-center">
              <h3 className="text-3xl font-bold mb-4">
                Pronto para Transformar Sua Operação?
              </h3>
              <p className="text-lg mb-8 text-blue-50">
                Solicite um orçamento personalizado e descubra como podemos ajudar sua empresa a alcançar metas ESG com economia real.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Link href="/contact">
                  <Button size="lg" variant="secondary" className="bg-white text-blue-700 hover:bg-blue-50">
                    Solicitar Orçamento
                  </Button>
                </Link>
                <Link href="/contact">
                  <Button size="lg" variant="outline" className="border-white text-white hover:bg-blue-800">
                    Agendar Demonstração
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
            Portal B2B - Soluções para Empresas
          </p>
          <div className="text-sm text-gray-500">
            © 2025 {APP_TITLE}. Todos os direitos reservados.
          </div>
        </div>
      </footer>
    </div>
  );
}

