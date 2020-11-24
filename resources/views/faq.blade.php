    @extends("layout.layout")
    @section('title', 'faq')
    @section('content')
        <!-- Acórdeão -->
        <div id="accordion">

            <!-- Linha 1 -->
            <div class="row">
                <!-- Cartão 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <!-- Pergunta 1, linha 1 -->
                                <button class="btn btn-link" data-toggle="collapse" data-target="#card1"
                                    aria-expanded="true" aria-controls="card1">
                                    Pergunta 1
                                </button>
                            </h5>
                        </div>
                        <div id="card1" class="collapse" aria-labelledby="headingOne">
                            <!-- Resposta 1, linha 1 -->
                            <div class="card-body">
                                Resposta 1
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cartão 2-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <!-- Pergunta 2, coluna 2 -->
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#card2"
                                    aria-expanded="false" aria-controls="card2">
                                    Pergunta 2
                                </button>
                            </h5>
                        </div>
                        <div id="card2" class="collapse" aria-labelledby="headingTwo">
                            <!-- Resposta 2, coluna 2 -->
                            <div class="card-body">
                                Resposta 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Linha 2 -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Cartão 3 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <!-- Pergunta 3, coluna 1 -->
                                <button class="btn btn-link" data-toggle="collapse" data-target="#card3"
                                    aria-expanded="true" aria-controls="card3">
                                    Pergunta 3
                                </button>
                            </h5>
                        </div>
                        <div id="card3" class="collapse" aria-labelledby="headingOne">
                            <!-- Resposta 3, coluna 1 -->
                            <div class="card-body">
                                Resposta 3
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cartão 4-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <!-- Pergunta 4, coluna 2 -->
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#card4"
                                    aria-expanded="false" aria-controls="card4">
                                    Pergunta 4
                                </button>
                            </h5>
                        </div>
                        <div id="card4" class="collapse" aria-labelledby="headingTwo">
                            <!-- Resposta 4, coluna 2 -->
                            <div class="card-body">
                                Resposta 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endsection
