@extends("layout.layout")
@section('title', 'home')
@section('inicio') 

<!-- Conteudo -->
<div class="imagem">
        <div class="espacoemcima"></div>
        <div class="botaoparabaixo">
            <a class="botao_seta" href="javascript:;">
                <span class="capabottom"></span>
            </a>
        </div>
    </div>
    @endsection
    @section('content') 
    <div id="todo" class="container">
        <h1 class="titulo1">Serviços</h1>

        <div class="row">
            <div class="col col-xl-3 col-lg-6 tudocirculo">
                <div class="circle">
                    <img src="./imagens/captacao-edit.jpg">
                </div>
                <h3 class="h3bolas">Captação</h3>
                <div class="textoconteudo">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>

            <div class="col col-xl-3 col-lg-6 tudocirculo">
                <div class="circle">
                    <img src="./imagens/masterizacao-edit.jpg">
                </div>
                <h3 class="h3bolas">Masterização</h3>
                <div class="textoconteudo">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>

            <div class="col col-xl-3 col-lg-6 tudocirculo">
                <div class="circle">
                    <img src="./imagens/mixagem-edit.jpg">
                </div>
                <h3 class="h3bolas">Mixagem</h3>
                <div class="textoconteudo">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>

            <div class="col col-xl-3 col-lg-6 tudocirculo">
                <div class="circle">
                    <img src="./imagens/beats-edit.jpg">
                </div>
                <h3 class="h3bolas">Beats</h3>
                <div class="textoconteudo">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>
        </div>



        <div class="row conteudo2">
            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-6 ">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./imagens/carrosselimg1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./imagens/carrosselimg2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./imagens/carrosselimg3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <h1 class="titulo2">Walhart</h1>
                <div class="textoconteudo">
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                        in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                        quo voluptas nulla pariatur?"
                    </p>
                </div>
            </div>
        </div>

    

    <div class="buttop">
        <a href="#top" class="seta-cima glyphicon glyphicon-chevron-up">
            <img class="imgtop" src="./imagens/logonovotopbut.png" alt="top">
        </a>
    </div>
    </div>



    <!-- Conteudo Fim -->

@endsection