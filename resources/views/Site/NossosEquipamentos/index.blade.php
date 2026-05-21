@include('Site.NossosEquipamentos.header')

@include('Site.navbar')
<div class="container-fluid custon-container margin-bar">
    <div class="container p-4">
        <div class="row mt-3 mb-3">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <h1 class="equipament-title title-family">Nossos equipamentos</h1>
            </div>
            <div class="col-12 col-md-6">
                <p class="lead">Nosso compromisso é de sempre buscar a melhor solução para nossos clientes, readequando
                    e disponibilizando ferramentas que permitam gerenciar de forma única seus processos e custos.</p>



                <p class="lead">Somos pioneiros neste segmento, portanto, apesar de todas as mudanças no mercado,
                    permanecemos firmes e nos mantermos na vanguarda do que há de mais tecnológico e inovador.</p>



                <p class="lead">O trabalho da Universo Digital é facilitar a sua vida. Com esta cultura em mente,
                    criamos soluções adequadas para diferentes nichos direcionando o equipamento certo que o seu mercado
                    precisa.</p>



                <p class="lead">Disponibilizamos modelos de equipamentos que atendem todas as necessidades de cada setor
                    e facilitam a operação, otimizam os processos e resultam em redução considerável de custos.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid custon-container-white">
    <div class="container p-4">
        <div class="row mt-3 mb-3">
            <div class="col-12 col-md-6">
                <ul>
                    <li class="lead">Ajude a reduzir seus custos operacionais com reposição de alto rendimento;</li>
                    <li class="lead">Sistemas de interface capaz de integrada permitindo que você compartilhe com vários
                        usuários em sua rede;</li>
                    <li class="lead">Ajuda a economizar papel e criar documentos frente e verso com impressão duplex
                        automática;</li>
                    <li class="lead">Máquinas com Tela touchscreen colorida de 3,7″.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <h1 class="equipament-title-white title-family"><span class="sublinhado">Economia de até <span
                            class="bolder">90%</span></span> no consumo de energia elétrica.</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid custon-container-white">
    <div class="container p-4">
        <div class="row mt-3 mb-3">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <h1 class="equipament-title-white title-family"><span class="sublinhado">Suporte <span class="bolder">no
                            local</span></span> para sua comodidade.</h1>
            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li class="lead">Qualidade de imagem excepcional</li>
                    <li class="lead">Manuseio versátil de mídia</li>
                    <li class="lead">Detalhes nítidos e precisos</li>
                    <li class="lead">Configuração simples</li>
                    <li class="lead">Suporte no local</li>
                    <li class="lead">Material de consumo reserva</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid custon-container-white">
    <div class="container p-4">
        <div class="row mt-3 mb-3">
            <div class="col-12 col-md-6">
                <p class="lead">Economize em tinta e obtenha impressos com qualidade profissional a um preço
                    incrivelmente acessível – custo de impressão até 40% menor.</p>

                <p class="lead">Controles administrativos para segurança, acessibilidade, gerenciamento de status e
                    manutenção.</p>

                <p class="lead">Eficiência e qualidade na Impressão, tudo o que quiser num equipamento de impressão
                    temos a sua disposição, com rapidez, economia e resolvendo sua necessidade.</p>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <h1 class="equipament-title-white title-family"><span class="sublinhado">Segurança, acessibilidade,
                        gerenciamento e eficiência <span class="bolder">para sua operação</span></span> se manter em
                    alto nível.</h1>
            </div>
        </div>
    </div>
</div>

@foreach ($sessao as $empresa)
<div class="container px-4 py-5" id="featured-3">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('storage/imagens/empresas/' . $empresa->imagem) }}" alt="{{ $empresa->nome }}">
    </div>
    <div class="row g-4 py-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @forelse ($empresa->produtos as $produto)
            <div class="col">
                <div class="card shadow-sm products-custon-size">

                    @if($produto->imagem)
                    <img src="{{ asset('storage/imagens/produtos/' . $produto->imagem) }}"
                        class="bd-placeholder-img card-img-top" height="225"
                        style="object-fit: cover;width: 100%;height: auto;" alt="{{ $produto->titulo }}">
                    @else
                    <svg class="bd-placeholder-img card-img-top" height="225" width="100%"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail">
                        <rect width="100%" height="100%" fill="#55595c" />
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    @endif

                    <div class="card-body">
                        <h5 style="color: #384975;">{{ $produto->nome }}</h5>

                        @if ($produto->descricao)
                        <p class="card-text" style="text-align: justify;">{{ $produto->descricao }}</p>
                        @endif

                        @if (!empty($produto->caracteristicas))
                        <ul>
                            @foreach ($produto->caracteristicas as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-muted text-center w-100">Sem produto cadastrado para esta empresa.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endforeach

<div class="container col-xxl-8 px-4 py-5">
    <div class="d-flex flex-column-reverse flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6">
            <h1 class="font-title-locacao">Universo digital</h1>
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 title-family">Vantagens</h1>
            <p class="custon-lead">Você conhece o significado de Outsourcing?</p>

            <p class="custon-lead">Ele refere-se a terceirização, ou locação, de serviços de impressão, como
                equipamentos, gerenciamento e suporte.</p>

            <p class="custon-lead">Neste caso, o cliente não investe em equipamentos e paga um serviço mensal apenas por
                aquilo que for utilizado/contratado.</p>

            <p class="custon-lead">O outsourcing é uma tendência de serviços e traz inúmeros benefícios para a sua
                operação.</p>
            <p class="custon-lead">Quer reduzir custos, manter a alta performance e ter a seu dispor impressoras
                preparadas para as principais aplicações do mercado?</p>

            <p class="custon-lead">Nós ajudamos o seu negócio de A a Z!</p>

            <p class="custon-lead">As máquinas da Universo Digital vão te ajudar a avançar para outro nível em seus
                processos, economizar dinheiro e abrir vantagem frente a concorrência!</p>

            <ul class="custom-list">
                <li>Suporte no local ✅</li>
                <li>Redução de 40% nos custos ✅</li>
                <li>Economia no consumo de energia elétrica de até 90% ✅</li>
                <li>Equipamentos atualizados ✅</li>
                <li>Material de consumo reserva ✅</li>
                <li>Contratos com fornecimento de papel. ✅</li>
                <li>Controle usuários através de senhas ✅</li>
            </ul>
            <p class="custon-lead">O nosso negócio é ajudar o seu!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ route('contato') }}">
                    <button type="button" class="btn btn-lg px-4 me-md-2 button-color-custon">Entre em contato</button>
                </a>
            </div>
        </div>

        <!-- Imagem (vem depois no mobile, primeiro no desktop) -->
        <div class="col-10 col-sm-8 col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 title-family">Outsourcing</h1>
            <img src="{{asset('assets/img/impressora_samsung.png')}}" class="d-block mx-lg-auto img-fluid"
                alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>

@include('Site.footerbar')

@include('Site.NossosEquipamentos.footer')