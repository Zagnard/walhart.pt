@extends("layout.layout")
@section('title', 'Contatos')
@section('content')
<div class="py-5">
    <div class="row">
        <div class="col">
            <h1>Contata-nos</h1>
            <hr>
            @if(Session::has('message_sent'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message_send')}}
            </div>
            @endif
            <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="ex:name@mail.pt" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="phone">Telemovel</label>
                    <input type="text" value="+351" name="phone" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="msg">Mensagem</label>
                    <textarea name="msg" placeholder="Se tiveres interessado em algum beat escreve aqui o nome do mesmo!" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-pimary float-right">Submeter</button>
            </form>
        </div>
        <div class="col ms-5">
            <h1>Info</h1>
            <hr>
            <p>Localidade: Monte Redondo</p>
            <p>Morada: Rua do centro nº7</p>
            <p>Codigo postal: 2425-617</p>
            <p>Cidade: Leiria</p>
        </div>
    </div>
</div><!-- /.container -->
@endsection