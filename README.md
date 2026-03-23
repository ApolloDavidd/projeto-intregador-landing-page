# 🚌 Landing Page - Tio Naná & Tia Márcia (Transporte Escolar)

![Status do Projeto](https://img.shields.io/badge/Status-Concluído-success)
![Versão](https://img.shields.io/badge/Versão-1.0-blue)
![Linguagem Principal](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)

## 📌 Descrição do Sistema

Este projeto consiste em uma **Landing Page de Alta Conversão** desenvolvida exclusivamente para o serviço de transporte escolar "Tio Naná & Tia Márcia". O sistema foi desenhado com foco em usabilidade (UX), acessibilidade e gatilhos mentais voltados para a segurança e confiança dos pais.

O principal diferencial técnico da aplicação é a sua **Arquitetura Leve e Desacoplada de Banco de Dados**. A página utiliza um motor PHP configuracional na sua raiz (um *Array* chamado `$dadosSite`), que atua como um "Mini-CMS" (Sistema de Gerenciamento de Conteúdo). Isso permite que o próprio cliente atualize textos, serviços e números de WhatsApp de forma simples, editando apenas as variáveis no topo do arquivo `index.php`, sem o risco de quebrar a interface visual (HTML/CSS).

O objetivo principal (KPI) do sistema é a geração de leads qualificados através do redirecionamento dinâmico para o WhatsApp.

---

## 🚀 Tecnologias Utilizadas

A aplicação foi construída visando performance extrema, segurança e facilidade de manutenção. As tecnologias empregadas foram:

**Back-end & Arquitetura de Dados:**
*   **PHP (7.4+ ou 8.x):** Utilizado para renderização no lado do servidor (Server-Side Rendering) e centralização das variáveis de conteúdo.

**Front-end & UI/UX:**
*   **HTML5:** Estrutura semântica focada em Acessibilidade (WCAG) e SEO.
*   **CSS3:** Estilização customizada seguindo a identidade visual da marca (Cores corporativas, sombras, hover effects).
*   **Bootstrap 5.3 (via CDN):** Framework responsável pelo *Grid System* (responsividade) e componentes estruturais base (Navbar mobile-first).
*   **Vanilla JavaScript (ES6):** Manipulação leve do DOM para interatividade (ex: recolhimento automático do menu em telas menores e efeitos de rolagem).

**Integrações e Assets:**
*   **Phosphor Icons:** Biblioteca vetorial de ícones otimizados.
*   **Google Fonts:** Família tipográfica `Inter`, garantindo legibilidade em qualquer dispositivo.
*   **WhatsApp API (`wa.me`):** Link de conversão dinâmico gerado pelo servidor.

---

## ⚙️ Passo a Passo para Executar a Aplicação

Por ser uma aplicação que utiliza PHP para renderizar o conteúdo, ela não pode ser aberta diretamente clicando no arquivo `.html`. Siga as instruções abaixo para rodar o projeto localmente:

### Pré-requisitos
Certifique-se de ter o **PHP instalado** na sua máquina. Você pode usar o PHP nativamente no terminal ou utilizar pacotes como **XAMPP**, **WAMP**, **MAMP** ou **Docker**.

### Via Terminal (Servidor Embutido do PHP) - *Recomendado*

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
Acesse a pasta do projeto:
code
Bash
cd nome-do-repositorio
Inicie o servidor embutido do PHP:
code
Bash
php -S localhost:8000
Acesse no navegador:
Abra o seu navegador de preferência e digite:
http://localhost:8000
Via XAMPP / WAMP / MAMP
Clone ou extraia a pasta do projeto dentro do diretório de servidores web públicos:
XAMPP: C:\xampp\htdocs\nome-do-projeto
WAMP: C:\wamp\www\nome-do-projeto
MAMP: /Applications/MAMP/htdocs/nome-do-projeto
Inicie o servidor Apache no painel de controle do software.
Abra o navegador e acesse:
http://localhost/nome-do-projeto
📂 Estrutura de Diretórios
Para fins de manutenção e documentação contínua, a arquitetura de pastas está distribuída da seguinte forma:
code
Text
/
├── index.php                 # Arquivo principal (Motor PHP, Variáveis de Configuração e HTML)
├── README.md                 # Documentação do repositório
└── assets/                   # Arquivos estáticos da aplicação
    ├── css/
    │   └── style.css         # Regras de design, cores e animações customizadas
    ├── js/
    │   └── main.js           # Scripts de comportamento e interatividade da interface
    └── media/
        └── image/            # Imagens otimizadas (banners, logos)
