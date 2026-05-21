@include('Site.Index.header')

@include('Site.navbar')
<div id="carouselExampleDark" class="carousel slide principal-background margin-bar" data-bs-ride="carousel">
    <div class="carousel-indicators vertical-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{asset('assets/img/Universo Digital.png')}}" class="d-block w-100" alt="Soluções de Outsourcing">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold title-family">Soluções completas em automação de precificação, comunicação visual e integração com ERP.</h5>
                <p>Atendimento especializado, suporte técnico e inovação que gera resultado no ponto de venda.</p>
                <a href="{{ route('servicos') }}">
                    <button type="button" class="btn btn-outline-info button-color-white">Conheça nossas soluções</button>
                </a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="{{asset('assets/img/2 UD LED.png')}}" class="d-block w-100" alt="Economia">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold title-family">Painéis de LED, totens digitais e telas de alta definição para transformar a experiência do seu cliente.</h5>
                <p>Projetos personalizados para igrejas, escolas, mercados e muito mais.</p>
                <a href="{{ route('paineis') }}">
                    <button type="button" class="btn btn-outline-info button-color-white">Solicite um projeto sob medida</button>
                </a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="{{asset('assets/img/3 Cartaz Fácil.png')}}" class="d-block w-100" alt="Alta Performance">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold title-family">O Cartaz Fácil integra com seu ERP e imprime etiquetas e cartazes com rapidez, padronização e zero retrabalho.</h5>
                <p>Ideal para quem busca eficiência e agilidade no PDV.</p>
                <a href="{{ route('cartazes') }}">
                    <button type="button" class="btn btn-outline-info button-color-white btn-size">Saiba como funciona</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-5 py-5 area-proposta">

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 title-family">NO GRUPO UNIVERSO DIGITAL</h2>
            <p class="lead">Nossa proposta é reduzir os custos de impressão de sua empresa com locação de equipamentos com fornecimento de insumos, suprimentos e assistência técnica, proporcionando comodidade e agilidade.</p>
            <div class="d-flex flex-md-row flex-column text-proposta">
                <a href="{{ route('servicos') }}"><button type="button" class="btn btn-lg btn-outline-info button-color-white btn-size mr-custon">Serviços</button></a>
                <a href="https://api.whatsapp.com/send?phone=5521993399166" target="_blank"><button type="button" class="btn btn-lg btn-outline-info button-color-inverse btn-size mt-2 mt-sm-0">Entre em contato</button></a>
            </div>
        </div>

        <div class="col">
            <div class="row row-cols-1 row-cols-sm-3 g-4">
                <div class="col d-flex flex-column gap-2 my-5">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-gradient fs-4 rounded-3 icon-custon-bg">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <h6 class="fw-semibold mb-0 text-body-emphasis h6-custon">Experiência e autoridade no segmento</h6>
                </div>

                <div class="col d-flex flex-column gap-2 my-5">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center icon-custon-bg bg-gradient fs-4 rounded-3">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                    <h6 class="fw-semibold mb-0 text-body-emphasis h6-custon">Economia real e redução de custos operacionais</h6>

                </div>

                <div class="col d-flex flex-column gap-2 my-5">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center icon-custon-bg bg-gradient fs-4 rounded-3">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h6 class="fw-semibold mb-0 text-body-emphasis h6-custon">Qualidade garantida e melhores marcas</h6>

                </div>

                <div class="col d-flex flex-column gap-2 my-5">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center icon-custon-bg bg-gradient fs-4 rounded-3">
                        <i class="fa-solid fa-square-phone"></i>
                    </div>
                    <h6 class="fw-semibold mb-0 text-body-emphasis h6-custon">Atendimento ágil e soluções personalizadas</h6>
                </div>

                <div class="col d-flex flex-column gap-2 my-5">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center icon-custon-bg bg-gradient fs-4 rounded-3">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h6 class="fw-semibold mb-0 text-body-emphasis h6-custon">Respeito ao Meio Ambiente como cultura</h6>

                </div>

                <div class="col d-flex flex-column gap-2 my-5">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center icon-custon-bg bg-gradient fs-4 rounded-3">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h6 class="fw-semibold mb-0 text-body-emphasis h6-custon">Time de especialistas e suporte no local</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-5 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 title-family">A Universo Digital</h1>
            <p class="lead">A Universo Digital Comércio e Serviços LTDA foi fundada em Abril de 1996, na cidade do Rio de Janeiro, iniciando sua trajetória no ramo de locação e manutenção de máquinas copiadoras.</p>
            <p class="lead">Hoje conta com uma carteira de mais de 700 clientes ativos, e ainda em fase de expansão.</p>
            <div class="d-grid d-md-flex justify-content-md-start">
                <a href="{{ route('sobrenos') }}"><button type="button" class="btn btn-lg px-4 me-md-2 button-color-custon">Saiba mais</button></a>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/img/banner-index.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>
<div class="parallax title-family">Principais serviços</div>
<div class="container-fluid area-proposta">
    <div class="container pt-5">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm custon-card">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal title-family">Locação de Equipamentos</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>Dispomos de equipamentos (multifuncionais) para locação, com instalação em 24 horas para atender eventos e feiras. Somos pioneiros nesta modalidade de locação com atendimento a várias empresas e segmentos do mercado em todo o Rio de Janeiro.</p>
                        <a href="{{ route('contato') }}"><button type="button" class="w-100 btn btn-lg button-color-custon">Saiba mais</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm custon-card">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal title-family">Manutenção de Equipamentos</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>Conte com uma equipe preparada para solucionar seus problemas de forma cirúrgica, rápida e com suporte no local. Redução de custos e manutenção de alta performance para deixar seus equipamentos sempre disponíveis na operação.</p>
                        <a href="{{ route('contato') }}"><button type="button" class="w-100 btn btn-lg button-color-custon">Saiba mais</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm custon-card">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal title-family">Gerenciamento de Impressão</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p>Oferecemos o serviço de gerenciamento de documentos onde efetivamos a digitalização (conversão de documentos físicos em formato digital) otimizando de forma dinâmica o acesso a informação bem como a manutenção de documentos por longa data.</p>
                        <a href="{{ route('contato') }}"><button type="button" class="w-100 btn btn-lg button-color-custon">Saiba mais</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-md-row flex-column-reverse px-3 py-5 px-md-5 py-md-5 bg-servicos">
        <div class="w-md-50 mt-3 mt-md-0">
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-title title-family">Somos especialistas</h2>
            <p class="lead">Com quase 30 anos no mercado de reprografia, a UNIVERSO DIGITAL também comercializa equipamentos nos segmentos de multifuncionais, duplicadores, scanners e impressoras de grande formato digitais, preto e branco e policromáticos de diversos fabricantes como: SAMSUNG, RICOH, BROTHER, KYOCERA e EPSON.</p>
        </div>
        <div class="w-md-50 mg-auto px-3">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @forelse($empresas as $value)
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <img src="{{ asset('storage/imagens/empresas/' . $value->imagem) }}" alt="{{ $value->nome }}" class="img-fluid style-image" style="max-height: 300px;">
                    </div>
                    @empty
                    <p class="text-muted">Nenhum parceiro cadastrado.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax title-family">Nossos produtos</div>
<div class="container mt-5">
    <div class="row justify-content-center mt-3 mb-3">
        @forelse($produtos as $value)
        <div class="col-12 col-5ths mb-3">
            <div class="box d-flex flex-column justify-content-between">
                <img src="{{ asset('storage/imagens/produtos/' . $value->imagem) }}" alt="Imagem 1">
                <h6 class="text-center p-3">{{ $value->nome }}</h6>
            </div>
        </div>
        @empty
        <p class="text-muted text-center">Nenhum produto cadastrado.</p>
        @endforelse
        <div class="d-flex justify-content-center mt-2 mb-2">
            <a href="{{route('equipamentos')}}"><button type="button" class="btn btn-lg button-color-custon">Ver todos os produtos</button></a>
        </div>
    </div>
</div>
<div class="parallax title-family">Você está em boa companhia</div>
<div class="container my-5">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper align-items-center">
            @forelse($parceiros as $value)
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/imagens/parceiros/' . $value->imagem) }}" alt="{{$value->nome}}" class="img-fluid">
            </div>
            @empty
            <p class="text-muted">Nenhum parceiro cadastrado.</p>
            @endforelse
        </div>
    </div>
</div>

@include('Site.footerbar')

@include('Site.Index.footer')