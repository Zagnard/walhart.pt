
@extends('layouts.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Service Information
        </div>
        <div class="card-body">

			<div><strong>Questão:</strong> {{ $faq->questions }} </div>
			<div><strong>Respostas</strong> {{ $faq->answers }} </div>
		</div>
	</div>
</div>
@endsection