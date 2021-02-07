
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Service Information
        </div>
        <div class="card-body">

			<div><strong>Name:</strong> {{$service->nome}} </div>
			<div><strong>Description:</strong> {{$service->descricao}} </div>
			<div><strong>Price:</strong> {{$service->preco}} </div>
		</div>
	</div>
</div>
@endsection