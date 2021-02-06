@extends ("layout.admin")


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categories</h1>


    <a href="{{ route('faqs.create') }}">       
        Add Category
		</a>
		@if(count($faqs))
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Perguntas</th>
                    <th>Respostas</th>
                    <th>Ações</th>
                </tr>
						</thead>
						@foreach($faqs as $faq)
						<!-- Isto não cria corpos novos? -->
            <tbody>
                <tr>
                    <td></td>
                    <td>Category about news</td>
                    <td nowrap>
                        <a class="btn btn-xs btn-primary btn-p" href="#"><i class="fas fa-eye fa-xs"></i></a>
                        <a class="btn btn-xs btn-warning btn-p" href="#"><i class="fas fa-pen fa-xs"></i></a>
                        <form method="POST" action="#" role="form" class="inline">
                            <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                    class="fas fa-trash fa-xs"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Events</td>
                    <td>Category about events</td>
                    <td nowrap>
                        <a class="btn btn-xs btn-primary btn-p" href="#"><i class="fas fa-eye fa-xs"></i></a>
                        <a class="btn btn-xs btn-warning btn-p" href="#"><i class="fas fa-pen fa-xs"></i></a>
                        <form method="POST" action="#" role="form" class="inline">
                            <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                    class="fas fa-trash fa-xs"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
		</div>
		@else
		<h6>Não há faqs registados</h6>
		@endif
@endsection

@section('moreScripts')
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
