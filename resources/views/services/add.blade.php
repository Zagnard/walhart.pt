@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Add Service
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('services.store')}}" class="form-group">
				@csrf
				@include('services.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Save</button>
					<a href="{{route('services.services')}" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection