@extends("layout.layout")
@section('title', 'Services')
@section('content')
  <div class="container">

  <section class="row section">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
      <div class="flex-center p-5 bg-color-primary section-min-h">
        <h1 class="text-color-white site-name">Serviços</h1>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="flex-center p-5">
        <p class="text-color-gray">Todos os serviços fornecidos pelo estúdio Walhart encontram-se descritos nesta página.</p>
      </div>
    </div>
  </section>

  @foreach ($service as $services)
  <section class="row section col-md-reverse">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="flex-center p-5">
        <div class="md-flex-center">
          <h2 class="text-color-primary mb-4">{{$services->nome}}</h2>
          <p class="mb-4">{{$services->descricao}}</p>
        </div>
      </div>
    </div>  
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
        <img src="./imagens/2 - Masterização de som.jpg" alt="Image" class="img-fluid">
      </div>
  </section>
  @endforeach

  <!-- 2nd section -->
  <!-- <section class="row section col-md-reverse">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="flex-center p-5">
        <div class="md-flex-center">
          <h2 class="text-color-primary mb-4">Masterização</h2>
          <p class="mb-4">Masterizar é o passo final no processo de pós produção do áudio. O propósito da masterização é balancear os elementos em uma mix em estéreo e otimizar a reprodução em todo o tipo de sistema de som e formatos de mídia. Tradicionalmente, a masterização é finalizada usando ferramentas como equalização, compressão, limiter e stereo enhancement.</p>
        </div>
      </div>
    </div>  
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
        <img src="./imagens/2 - Masterização de som.jpg" alt="Image" class="img-fluid">
      </div>
  </section> -->

  <!-- 3rd Section -->
  <!-- <section class="row section mb-30">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
      <img src="./imagens/3 - Mixagem de som.jpg" alt="Image" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="flex-center p-5">
        <div class="md-flex-center">
          <h2 class="text-color-primary mb-4">Mixagem</h2>
          <p class="mb-4">A mixagem de áudio - ou apenas mix - é a parte da pós-produção na qual estes instrumentos da música são unidos, nivelados e equilibrados, ou seja, é a organização de tudo isso. O seu principal objetivo é obter um equilíbrio entre o volume e o timbre de todos os instrumentos, de forma que cada um possa ser ouvido claramente.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- 4th Section -->
  <!-- <section class="row section col-md-reverse">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="flex-center p-5">
        <div class="md-flex-center">
          <h2 class="text-color-primary mb-4">Gravação da voz</h2>
          <p class="mb-4">A gravação de voz é o momento em que o artista irá cantar e a sua voz será gravada para depois ser introduzida na música e receber todos os tratamentos necessários para que se encaixe na música.</p>
        </div>
      </div>
    </div>  
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
        <img src="./imagens/1 - Captação de som.jpg" alt="Image" class="img-fluid">
      </div>
  </section> -->

  <!-- 5th Section -->
  <!-- <section class="row section mb-30">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
      <img src="./imagens/4 - Beats.png" alt="Image" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="flex-center p-5">
        <div class="md-flex-center">
          <h2 class="text-color-primary mb-4">Criação de Beats</h2>
          <p class="mb-4">A criação de beats consiste na criação de uma música, juntando os vários instrumentos musicais para criar uma melodia.</p>
        </div>
      </div>
    </div>
  </section> -->

  </div>

@endsection