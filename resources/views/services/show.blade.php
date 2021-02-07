
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Service Information
        </div>
        <div class="card-body">

			<div><strong>Name:</strong> {{$services->nome}} </div>
			<div><strong>Description:</strong> {{$services->descricao}} </div>
		</div>
	</div>
</div>
@endsection