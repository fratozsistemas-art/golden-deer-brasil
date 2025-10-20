import { Link, useLocation } from "wouter";
import { Button } from "@/components/ui/button";
import { APP_LOGO } from "@/const";

export default function Navigation() {
  const [location] = useLocation();

  return (
    <nav className="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/80">
      <div className="container flex h-16 items-center justify-between">
        {/* Logo and Brand */}
        <Link href="/">
          <a className="flex items-center gap-3 hover:opacity-80 transition-opacity">
            <img 
              src={APP_LOGO} 
              alt="Golden Deer Brasil" 
              className="h-10 w-10"
            />
            <div className="flex flex-col">
              <span className="text-lg font-bold text-[#2F5233]">
                Golden Deer Brasil
              </span>
              <span className="text-xs text-gray-600 hidden sm:block">
                Tecnologia Sustentável de Resíduos Orgânicos
              </span>
            </div>
          </a>
        </Link>

        {/* Navigation Links */}
        <div className="flex items-center gap-6">
          <Link href="/">
            <a className={`text-sm font-medium transition-colors hover:text-[#2F5233] ${
              location === "/" ? "text-[#2F5233]" : "text-gray-600"
            }`}>
              Início
            </a>
          </Link>
          
          <Link href="/technology">
            <a className={`text-sm font-medium transition-colors hover:text-[#2F5233] ${
              location === "/technology" ? "text-[#2F5233]" : "text-gray-600"
            }`}>
              Tecnologia
            </a>
          </Link>

          <Link href="/contact">
            <a className={`text-sm font-medium transition-colors hover:text-[#2F5233] ${
              location === "/contact" ? "text-[#2F5233]" : "text-gray-600"
            }`}>
              Contato
            </a>
          </Link>

          {/* CTA Buttons */}
          <Link href="/b2g">
            <Button 
              variant="outline" 
              className="border-green-600 text-green-600 hover:bg-green-50"
            >
              Portal B2G
            </Button>
          </Link>

          <Link href="/b2b">
            <Button 
              className="bg-blue-600 hover:bg-blue-700 text-white"
            >
              Portal B2B
            </Button>
          </Link>
        </div>
      </div>
    </nav>
  );
}

