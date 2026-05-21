@include('Site.Sobrenos.header')

@include('Site.navbar')
<div class="container my-5 margin-bar">
    <div class="row pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis title-family">Sobre nós</h1>
            <p class="lead">A Universo Digital foi fundada em abril de 1996, na cidade do Rio de Janeiro, iniciando sua trajetória no ramo de locação e manutenção de máquinas copiadoras.</p>


            <p class="lead">Hoje conta com uma carteira de mais de 700 clientes ativos, e ainda em fase de expansão.</p>


            <p class="lead">São quase 30 anos no mercado de reprografia, a UNIVERSO DIGITAL também comercializa equipamentos nos segmentos de multifuncionais, duplicadores, scanners e impressoras de grande formato digitais, preto e branco e policromáticos de diversos fabricantes como: SAMSUNG, RICOH, BROTHER, KYOCERA e EPSON.</p>

        </div>
    </div>
</div>

<div class="parallax title-family">
    Proposta de Valor
</div>
<div class="p-0 p-md-5 mb-4 bg-body-tertiary rounded-3 custon-bg-proposta">
    <div class="container-fluid py-5">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="d-flex flex-wrap justify-content-center">
                    <img src="{{asset('assets/img/imagem1.jpeg')}}" alt="Example image" class="jumbotron-image custon-proposta-img" />
                    <img src="{{asset('assets/img/imagem2.jpeg')}}" alt="Example image" class="jumbotron-image custon-proposta-img" />
                </div>
            </div>
            <div class="col-12 col-md-6">
                <ul class="fs-5">
                    <li>Suprimentos de alta capacidade</li>
                    <li>Menos intervenções</li>
                    <li>Tecnologia robusta</li>
                    <li>Bivolt, 80% de economia de energia</li>
                    <li>Economia de tempo e dinheiro</li>
                    <li>Sustentabilidade</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="parallax title-family">
    Locação de equipamentos
</div>
<div class="container px-4 py-5" id="featured-3">
    <h1 class="font-title-locacao title-family">Universo digital</h1>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <h3 class="fs-2 text-body-emphasis list-style">Economize tempo, dinheiro e energia</h3>
            <p class="list-style">Equipamentos com alta economia de tinta, até 80% menos de energia em comparação a impressoras padrões</p>
        </div>
        <div class="feature col">
            <h3 class="fs-2 text-body-emphasis list-style">Alta velocidade de impressões e digitalização</h3>
            <p class="list-style">Impressoras capazes de fazer Impressão de até 24 folhas por minuto (em preto branco ou colorida) e a rapidez na digitalização de até 25 páginas por minuto.</p>

        </div>
        <div class="feature col">
            <h3 class="fs-2 text-body-emphasis list-style">Flexibilidade no uso de papéis</h3>
            <p class="list-style">Impressoras com alimentador traseiro de até 85 folhas para papéis especiais e de diferentes tamanhos, tendo capacidade total de papel de até 1.835 folhas e com duas bandejas de papel opcionais dependendo do equipamento selecionado</p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{ route('servicos') }}" class="btn btn-lg button-color-custon btn-size mt-2 mt-sm-0">Veja mais sobre nossos serviços</a>
    </div>
</div>

@include('Site.footerbar')

@include('Site.Sobrenos.footer')