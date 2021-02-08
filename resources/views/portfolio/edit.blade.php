@extends('layout.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Beat
        </div>
        <div class="card-body">
		
			<form method="POST" enctype="multipart/form-data" action="{{route('portfolios.update',$portfolio)}}" class="form-group inline">
				@csrf
				@method("PUT")
				@include('portfolio.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Save</button>

					<a href="{{route('portfolios.index')}}" class="btn btn-default">Cancel</a>
    
				</div>

			</form>
			
		</div>
	</div>
</div>


@endsection