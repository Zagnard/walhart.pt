@extends('layout.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3"> Informação Beats
		</div>
		<div class="card-body">
			<div><strong>Nome:</strong> {{$portfolio->nome_beat}} </div>
			<div><strong>Descrição:</strong> {{$portfolio->descricao}} </div>
			<div><strong>Tipo:</strong> {{$portfolio->tipo}} </div>
			@if ($portfolio->beat_audio)
                <audio controls>
                  <source src="{{Storage::url($portfolio->beat_audio)}}" type="audio/mpeg">
                </audio>
            @endif
			@if ($portfolio->beat_imagem)
			<div>
				<img width="300" height="300" alt="Beat image" src="{{Storage::url($portfolio->beat_imagem)}}">
			</div>
			@endif

		</div>
	</div>
</div @endsection