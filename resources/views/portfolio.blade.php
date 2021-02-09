@extends("layout.layout")
@section('title', 'Portfolio')
@section('inicio')

<div class="masthead">
  <div class="container h-100 ">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center bg-image">
        <h1 class="font-weight-bold">Portfólio</h1>
        <p class="lead">Aqui podes encontrar os artistas com quem trabalhamos e os beats feitos pelo nosso produtor</p>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
  <div class="container marketing py-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    	      	<h1 class="title-col">Colaboradores</h1>
      <div class="col-lg-4">
        <img class="img-place" width="140px" src="./imagens/alx_trs.jpg">

        <h2>Walhart</h2>
        <p>Produtor e engenheiro de som que faz beats, mixagem, masteriza e faz muitos outros serviços de som.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/alx_trs/" role="button">Segue &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-place" width="140px" src="./imagens/gundi.jpg">
        <h2>Gundi</h2>
        <p>Agente do nosso estúdio. Responsável pelas colaborações, contactos e contas da nossa empresa.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/g.u.n.di/" role="button">Segue &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-place" alt="Avatar" width="140px" src="./imagens/tiago.domingues.jpg">
        <h2>Tiago Domingues</h2>
        <p>Diretor de video. Capta, edita e faz todos os serviços audio-visual, markting e merchandising.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/p/Be8zXxbAi6X/" role="button">Segue &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->



    <hr class="featurette-divider">

    <h1 class="text-center mb-5">Beats</h1>

    @if (count($portfolios))
    @foreach($portfolios as $portfolio)
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{$portfolio->tipo}} <span class="text-muted">{{$portfolio->nome_beat}}</span></h2>
        <p class="lead">{{$portfolio->descricao}}</p>
        @if ($portfolio->beat_audio)
        <audio controls controlsList="nodownload">
          <source src="{{Storage::url($portfolio->beat_audio)}}" type="audio/mpeg">
        </audio>
        @endif
      </div>
      <div class="col-md-5">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="50" height="50" xmlns="./imagens/pac5c_4x5.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        -->
        <img class="img-place" width="300" height="300" src="{{Storage::url($portfolio->beat_imagem)}}">

      </div>
    </div>
    <hr class="featurette-divider">
    @endforeach
    @endif

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection