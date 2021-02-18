    @extends("layout.layout")
    @section('title', 'faq')
    @section('content')
        <!-- Acórdeão -->
        <div class="accordion" id="accordion">

            <!-- Linha 1 -->
            <div class="row">
							@foreach($faqs as $faq)
                <!-- Cartão 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="headingOne{{ @$faq->id }}">
                            <h5 class="mb-0">
                                <!-- Pergunta 1, linha 1 -->
                                <button class="btn btn-link" data-toggle="collapse" data-target="#card{{ @$faq->id }}"
                                    aria-expanded="true" aria-controls="card1">
                                    {{$faq->questions}}
                                </button>
                            </h5>
                        </div>
                        <div id="card{{ @$faq->id }}" class="collapse" aria-labelledby="headingOne{{ @$faq->id }}">
                            <!-- Resposta 1, linha 1 -->
                            <div class="card-body">
															{{$faq->answers}}
                            </div>
                        </div>
                    </div>
                </div>
							@endforeach
            </div>
@endsection

@section('scripts')

<script>

$('.collapse').collapse();

</script>

@endsection
