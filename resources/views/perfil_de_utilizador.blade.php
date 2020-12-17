@extends("layout.layout")
@section('title', 'perfil de utilizador')
@section('content')


    <!-- Definição da lista de separadores -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <!-- Separador de dados pessoais -->
        <li class="nav-item">
            <a class="nav-link active" id="separador_dados_pessoais" data-toggle="tab" href="#dados_pessoais" role="tab"
                aria-controls="home" aria-selected="true">
                Dados pessoais
            </a>
        </li>
        <!-- Separador de dados financeiros-->
        <li class="nav-item">
            <a class="nav-link" id="separador_dados-financeiros" data-toggle="tab" href="#dados_financeiros" role="tab"
                aria-controls="contact" aria-selected="false">
                Dados financeiros
            </a>
        </li>
    </ul>

    <!-- Definição do conteúdo para os diferentes separadores -->
    <div class="tab-content" id="myTabContent">
        <!-- Definição do conteúdo para o separador de dados pessoais -->
        <div class="tab-pane fade show active" id="dados_pessoais" role="tabpanel" aria-labelledby="home-tab">
            <!-- Coluna 1 - Dados pessoais -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Linha 1 -->
                    <div class="row pt-4">
                        <div class="col-md-12 pb-2">
                            <h6 class="mb-0">
                                Nome
                            </h6>
                            <span>
                                André Filipe Silva Oliveira
                            </span>
                        </div>
                    </div>
                    <!-- Linha 2-->
                    <div class="row">
                        <!-- Sexo -->
                        <div class="col-md-6 pb-2">
                            <h6 class="mb-0">
                                Sexo
                            </h6>
                            <span>
                                Masculino
                            </span>
                        </div>
                        <!-- Data de nascimento -->
                        <div class="col-md-6">
                            <h6 class="mb-0">
                                Data de nascimento
                            </h6>
                            <span>
                                24-05-1994
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Coluna 2 - Morada e contactos -->
                <div class="col-md-6">
                    <!-- Linha 1 -->
                    <div class="row pt-4">
                        <div class="col-md-12 pb-2">
                            <h6 class="mb-0">
                                Morada
                            </h6>
                            <span>
                                Rua dos Veríssimos, Guia, Pombal, 3105-097
                            </span>
                        </div>
                    </div>
                    <!-- Linha 2 -->
                    <div class="row">
                        <div class="col-md-12 pb-2">
                            <h6 class="mb-0">
                                Email
                            </h6>
                            <span>
                                ragnarocker23@hotmail.com
                            </span>
                        </div>
                    </div>
                    <!-- Linha 3 -->
                    <div class="row">
                        <div class="col-md-6 pb-2">
                            <h6 class="mb-0">
                                Telefone
                            </h6>
                            <span>
                                0987654312
                            </span>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-0">
                                Telemóvel
                            </h6>
                            <span>
                                67489320494
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Definição do conteúdo para o separador de dados financeiros-->
        <div class="tab-pane fade" id="dados_financeiros" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered text-center align-middle">
                        <thead>
                            <tr>
                                <th>
                                    Número de encomenda
                                </th>
                                <th>
                                    Serviços prestados
                                </th>
                                <th>
                                    Data
                                </th>
                                <th>
                                    Preço
                                </th>
                                <th>
                                    Estado
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    456789
                                </td>
                                <td>
                                    Serviço 1
                                    <br>
                                    Serviço 2
                                    <br>
                                    Serviço 3
                                </td>
                                <td>
                                    21-02-2019
                                </td>
                                <td>
                                    90 €
                                </td>
                                <td>
                                    Pago
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
