@include('Site.Servicos.header')

@include('Site.navbar')
<div class="container my-5 margin-bar">
    <div class="row mt-3 mb-3">
        <div class="col-12 col-md-6">
            <h2 class="custon-title custon-color title-family">Nossos Serviços</h2>
            <h4 class="custon-color">LOCAÇÃO / OUTSOURCING DE IMPRESSÃO</h4>
            <h6 class="lead custon-subtitle custon-color">Nosso Objetivo</h6>
            <p class="lead">O serviço oferecido pela Universo Digital visa terceirizar todo o processo de impressão dentro da empresa, ou seja, todos os equipamentos e insumos relacionados à produção de documentos nas dependências da empresa ficam sob a responsabilidade de uma empresa parceira especializada. Empresas de todos os portes contratam este tipo de serviço. O objetivo é a otimização de Fluxo de Processos para reduzir o custo das operações que envolvem impressões e cópias.</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('assets/img/Banner-Slider.png') }}" alt="" class="img-servico-custon">
            <div class="row mt-3 mb-3">
                <div class="col-12 col-md-6">
                    <ul class="lead custon-list">
                        <li>Redução com os custos de impressão.</li>
                        <li>Definição de custos por impressão P&B e colorida.</li>
                        <li>Agilidade no processo.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="lead custon-list">
                        <li>Definição de custos por tamanho e tipo de papel.</li>
                        <li>Administração fácil e configuração flexível.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row p-0">
        <div class="col-12 col-md-6 p-0 primeira-imagem"></div>
        <div class="col-12 col-md-4 p-4 d-flex flex-column justify-content-center">
            <h2 class="title-family">Confira os principais benefícios trazidos pela Universo Digital para você e sua empresa</h2>
            <ul>
                <li>Aluguel de equipamentos com dedução no imposto de renda para PJ;</li>
                <li>Redução nos custos com compra, manutenção e estocagem de suprimentos;</li>
                <li>Maior controle dos gastos com impressão;</li>
                <li>Eliminação de custos não mensuráveis, como instalação, Help Desk, reconfiguração, suporte;</li>
                <li>Suporte técnico e manutenção preventiva;</li>
                <li>Otimização do processo de impressão e cópia;</li>
                <li>Administração fácil e configuração flexível;</li>
                <li>Uso apenas de toners originais;</li>
                <li>Alta qualidade de impressão;</li>
                <li>Gerenciamento de impressão.</li>
            </ul>
        </div>
        <div class="col-12 col-md-2" style="background: #edf1f2;"></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-2" style="background: #edf1f2;"></div>
        <div class="col-12 col-md-4 p-4 d-flex flex-column justify-content-center">
            <h2 class="title-family">Necessidades da sua empresa</h2>
            <p class="lead">Para atender e entender as necessidades dos clientes da Universo Digital, oferecemos consultores para a empresa estudar as particularidades do negócio e fornecer soluções personalizadas, incluindo custo, tecnologia utilizada, mão de obra disponível e carga de trabalho necessária. </p>
        </div>
        <div class="col-12 col-md-6 p-0 segunda-imagem"></div>
    </div>
</div>
<div class="container-fluid servico-especialista custon-paralax">
    <div class="overlay">
        <div class="container d-flex flex-column align-items-center justify-content-around h-100">
            <p class="title-family">Ficou com dúvida sobre mais algum ponto não mencionado acima?</p>
            <a href="https://api.whatsapp.com/send?phone=5521993399166" target="_blank" class="btn btn-lg btn-secondary button-color-custon btn-size mt-2 mt-sm-0">Falar com um especialista</a>
        </div>
    </div>
</div>

@include('Site.footerbar')

@include('Site.Servicos.footer')