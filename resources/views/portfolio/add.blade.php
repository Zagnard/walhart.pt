@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Adicionar Beat
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('portfolios.store')}}" class="form-group">
				@csrf
				@include('portfolio.partials.add-edit')

				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Salvar</button>
					<a href="{{route('portfolios.index')}" class="btn btn-default">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection 