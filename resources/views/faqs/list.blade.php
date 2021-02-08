@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">F.A.Q.</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{ route(faqs.list) }}">
        <i class="fas fa-plus"></i> faqs
      </a>
    </div>
    <div class="card-body">
		@if(count($faqs))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Question</th>
              <th>Answer</th>
            </tr>
          </thead>
          <tbody>
          @foreach($faqs as $faq)
            <tr>
              <td>{{$faq->questions}}</td>
              <td>{{$faq->answers}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{ route('faqs.show', $faq) }}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{ route('faqs.edit', $faq) }}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{ route('faqs.destroy', faq) }}" role="form" class="inline" onsubmit="return confirm('Tem a certeza que quer destruir este faq?')">
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
      <h6>Sem faqs registados</h6>
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