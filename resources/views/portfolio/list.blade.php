@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Portfolio de Beats</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('portfolios.create')}}">
        <i class="fas fa-plus"></i> Adicionar beat
      </a>
    </div>
    <div class="card-body">
      @if (count($portfolio))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Tipo</th>
              <th>Menu</th>
            </tr>
          </thead>
          <tbody>
            @foreach($portfolio as $portfolios)
            <tr>
              <td>
                @if ($portfolios->beat_audio)
                <audio controls>
                  <source src="{{Storage::disk('public')->url('beats/').$post->beat_audio}}" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                @endif
              </td>

              <td>{{$portfolios->nome_beat}}</td>
              <td>{{$portfolios->descricao}}</td>
              <td>{{$portfolios->tipo}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('portfolios.show',$portfolios)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('portfolios.edit',$portfolios)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('portfolios.destroy',$portfolios)}}" role="form" class="inline" onsubmit="return confirm('Tem a certeza que quer excluir este beat?')">
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
  $('#dataTable').dataTable({
    destroy: true,
    "order": [
      [0, 'asc']
    ],
    "columns": [
      null,
      null,
      {
        "orderable": false
      }
    ]
  });
</script>
@endsection