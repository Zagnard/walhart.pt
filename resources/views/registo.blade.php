@extends("")
@section("", "")
@section('')
<div class="container">
        <form action="" method="POST">
            <!-- Dados pessoais linha 1 -->
            <div class="row">
                <!-- Nome -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome">
                            Nome
                        </label>
                        <input type="text" class="form-control" id="nome" name="apelido" placeholder="Nome">
                    </div>
                </div>
                <!-- Apelido -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apelido">
                            Apelido
                        </label>
                        <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Último nome">
                    </div>
                </div>
            </div>

            <!-- Dados pessoais linha 2-->
            <div class="row">
                <!-- Data de nascimento -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data_de_nascimento">
                            Data de nascimento
                        </label>
                        <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento">
                    </div>
                </div>
                <!-- Sexo -->
                <div class="col-md-6">
                    <div class="form-check">
                        <span>
                            Sexo
                        </span>
                        <br>
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                        <label class="form-check-label" for="masculino">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                        <label class="form-check-label" for="feminino">
                            Feminino
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

            <!-- Morada linha 1 -->
            <div class="row">
                <!-- Rua -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rua">
                            Rua
                        </label>
                        <input type="text" class="form-control" id="rua" name="rua"
                            placeholder="rua do/da..., nº/lote...">
                    </div>
                </div>
                <!-- Localidade -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="localidade">
                            Localidade
                        </label>
                        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="guia">
                    </div>
                </div>
            </div>
            <!-- Morada linha 2-->
            <div class="row">
                <!-- Concelho -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="concelho">
                            Concelho
                        </label>
                        <input type="text" class="form-control" id="concelho" name="concelho" placeholder="Pombal">
                    </div>
                </div>
                <!-- Código postal -->
                <div class="col-md-6">
                    <div class="form-group">
                        <span>
                            Código postal
                        </span>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="codigoPostal1" name="codigoPostal1"
                                    pattern="[0-9]+" placeholder="1234" maxlength="4">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="codigoPostal2" name="codigoPostal2"
                                    pattern="[0-9]+" placeholder="123" maxlength="3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

            <!-- Contactos linha 1-->
            <div class="row">
                <!-- Telefone -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefone">
                            Telefone
                        </label>
                        <input type="text" class="form-control" id="telefone" name="telefone" pattern="[0-9]+"
                            placeholder="2..." maxlength="9">
                    </div>
                </div>
                <!-- Telemóvel -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telemovel">
                            Telemóvel
                        </label>
                        <input type="text" class="form-control" id="telemovel" name="telemovel" pattern="[0-9]+"
                            placeholder="9..." maxlength="9">
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- Botões do formulário -->
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Submeter
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <button type="reset" class="btn btn-primary">
                            Limpar
                        </button>
                    </div>
                </div>
            </div>
    </div>

    </form>
    </div>
@endsection