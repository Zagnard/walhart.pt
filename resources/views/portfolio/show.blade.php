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
		</div>
	</div>
</div @endsection