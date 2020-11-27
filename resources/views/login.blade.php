@extends("layout.layout")
@section('title', 'login')
@section('content')
<p>sfdsagfda</p>
    <div class="container">
        <form action="" method="POST">
            <!-- Introdução dos dados do utilizador -->
            <div class="row">
                <!-- introdução de nome de utilizador -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome_de_utilizador">
                            Nome de utilizador
                        </label>
                        <input type="text" class="form-control" id="nome_de_utilizador" name="nome_de_utilizador"
                            placeholder="Nome de utilizador">
                    </div>
                </div>
                <!-- Introdução da password -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="******">
                    </div>
                </div>
            </div>
            <br>

            <!-- Botões do formulário -->
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Entrar
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