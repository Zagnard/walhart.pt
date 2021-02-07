@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Portfolio de Beats</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('portfolio.create')}}">
        <i class="fas fa-plus"></i> Add Beat
      </a>
    </div>
    <div class="card-body">
    @if (count($portfolio))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Type</th>
              <th>Menu</th>
            </tr>
          </thead>
          <tbody>
          @foreach($portfolio as $portfolios)
            <tr>
              <td>{{$portfolios->nome_beat}}</td>
              <td>{{$portfolios->descricao}}</td>
              <td>{{$portfolios->tipo}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('portfolio.show',$portfolios)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('portfolio.edit',$portfolios)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('portfolio.destroy',$portfolios)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza que quer excluir este beat?')">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
      <h6>Sem serviços registados</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("moreScripts")
<script>
  $('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 0, 'asc' ]],  
	"columns": [
	  null,
    null,
    { "orderable": false }
  ]
} );

</script>
@endsection