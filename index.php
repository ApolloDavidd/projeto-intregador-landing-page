<?php
$dadosSite =[
    "nomeEmpresa" => "Tio Naná & Tia Márcia",
    "slogan" => "Transporte Escolar",
    "whatsapp" => "5511971321186",
    "telefone" => "(11) 97132-1186",
    
    "seo" =>[
        "palavras" => "transporte escolar, van escolar, condução escolar, segurança",
        "descricao" => "Serviço seguro e confiável de transporte escolar com Tio Naná e Tia Márcia. Mais de 12 anos cuidando do trajeto de alunos."
    ],

    "hero" =>[
        "tag" => "Segurança em primeiro lugar",
        "titulo" => "Transporte Escolar Seguro e Confiável",
        "texto" => "Levamos alunos para a escola com segurança, responsabilidade e pontualidade. Tranquilidade para os pais e conforto para as crianças."
    ],

    "sobre" =>[
        "titulo" => "Mais do que transporte, entregamos confiança",
        "texto1" => "Com mais de 12 anos de experiência, atuamos com compromisso diário com o bem-estar dos alunos.",
        "texto2" => "Veículos sempre revisados, higienizados e equipados, garantindo conforto em cada trajeto."
    ],

    "servicos" => [[
            "icone" => "ph-clock",
            "titulo" => "Transporte Diário",
            "texto" => "Ida e volta para escolas e creches com horários organizados e rotas bem planejadas."
        ],[
            "icone" => "ph-heartbeat",
            "titulo" => "Cuidado Individualizado",
            "texto" => "Acompanhamos cada aluno com atenção, garantindo embarque e desembarque seguros."
        ],[
            "icone" => "ph-shield-check",
            "titulo" => "Veículos Equipados",
            "texto" => "Revisões periódicas e normas de segurança seguidas à risca para total conforto."
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dadosSite['nomeEmpresa']; ?> | <?php echo $dadosSite['slogan']; ?></title>
    
    <meta name="description" content="<?php echo $dadosSite['seo']['descricao']; ?>">
    <meta name="keywords" content="<?php echo $dadosSite['seo']['palavras']; ?>">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-fundo">

    <nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm" id="menu-principal">
        <div class="container py-2">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="logo-icone">
                    <i class="ph-fill ph-bus"></i>
                </div>
                <div>
                    <div class="fw-bold texto-azul lh-1 fs-5"><?php echo $dadosSite['nomeEmpresa']; ?></div>
                    <div class="texto-cinza small"><?php echo $dadosSite['slogan']; ?></div>
                </div>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuMobile">
                <i class="ph ph-list fs-2 texto-azul"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menuMobile">
                <ul class="navbar-nav align-items-center gap-3 mt-3 mt-lg-0">
                    <li class="nav-item"><a class="nav-link fw-medium" href="#sobre">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#contato">Contato</a></li>
                    <li class="nav-item">
                        <a href="https://wa.me/<?php echo $dadosSite['whatsapp']; ?>" target="_blank" class="btn-azul px-4 py-2 rounded-pill">
                            Fale Conosco
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-bg" id="inicio">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-white mt-5 mt-lg-0">
                    <span class="badge-amarelo mb-3 d-inline-block">
                        <i class="ph-fill ph-shield-check"></i> <?php echo $dadosSite['hero']['tag']; ?>
                    </span>
                    <h1 class="display-4 fw-bold mb-4"><?php echo $dadosSite['hero']['titulo']; ?></h1>
                    <p class="fs-5 mb-5 opacity-75"><?php echo $dadosSite['hero']['texto']; ?></p>
                    
                    <a href="https://wa.me/<?php echo $dadosSite['whatsapp']; ?>" target="_blank" class="btn-amarelo px-5 py-3 rounded-pill fs-5 d-inline-flex align-items-center gap-2">
                        <i class="ph-fill ph-whatsapp-logo fs-3"></i> Chamar no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section id="sobre" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center gap-5 gap-lg-0">
                <div class="col-lg-6 position-relative">
                    <img src="assets/media/image/transpor.jpg" alt="Van Escolar" class="img-fluid rounded-4 shadow-lg w-100 object-fit-cover" style="height: 400px;">
                    <div class="selo-anos">
                        <span class="fs-1 fw-bold d-block lh-1">12</span>
                        <span class="small text-uppercase fw-bold">Anos</span>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold texto-azul mb-4"><?php echo $dadosSite['sobre']['titulo']; ?></h2>
                    <p class="fs-5 texto-cinza mb-3"><?php echo $dadosSite['sobre']['texto1']; ?></p>
                    <p class="fs-5 texto-cinza"><?php echo $dadosSite['sobre']['texto2']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos" class="py-5 bg-fundo">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold texto-azul">Nossos Serviços</h2>
                <div class="linha-amarela mx-auto mt-2"></div>
            </div>
            
            <div class="row g-4">
                <?php foreach ($dadosSite['servicos'] as $servico): ?>
                <div class="col-md-4">
                    <div class="card-servico">
                        <div class="icone-box mb-4">
                            <i class="ph-fill <?php echo $servico['icone']; ?> fs-1"></i>
                        </div>
                        <h3 class="h5 fw-bold texto-azul mb-3"><?php echo $servico['titulo']; ?></h3>
                        <p class="texto-cinza mb-0"><?php echo $servico['texto']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contato" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold texto-azul">Fale Conosco</h2>
                <p class="texto-cinza">Tire suas dúvidas ou garanta a vaga do seu filho.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card-contato text-center">
                        <i class="ph-fill ph-phone fs-1 texto-azul mb-3"></i>
                        <h4 class="h5 fw-bold">Ligação</h4>
                        <p class="texto-cinza mb-3">Fale direto com a gente</p>
                        <a href="tel:<?php echo $dadosSite['whatsapp']; ?>" class="fw-bold fs-5 text-decoration-none texto-azul">
                            <?php echo $dadosSite['telefone']; ?>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-contato text-center text-white shadow-lg" style="background-color: #1e3a8a; transform: translateY(-10px);">
                        <i class="ph-fill ph-whatsapp-logo fs-1 texto-amarelo mb-3"></i>
                        <h4 class="h5 fw-bold text-white">WhatsApp</h4>
                        <p class="opacity-75 mb-4 text-white">Atendimento rápido</p>
                        <a href="https://wa.me/<?php echo $dadosSite['whatsapp']; ?>" target="_blank" class="btn-amarelo d-block w-100 py-3 rounded-3">
                            Enviar Mensagem
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-contato text-center">
                        <i class="ph-fill ph-clock fs-1 texto-azul mb-3"></i>
                        <h4 class="h5 fw-bold">Atendimento</h4>
                        <p class="texto-cinza mb-3">Segunda a Sexta<br>06:00 às 19:00</p>
                        <span class="fw-bold texto-azul">Sempre à disposição</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 text-center">
        <div class="container">
            <p class="mb-0 text-white-50">
                &copy; <?php echo date('Y'); ?> <?php echo $dadosSite['nomeEmpresa']; ?>. Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>