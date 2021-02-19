    @extends("layout.layout")
    @section('title', 'faq')
    @section('content')
        <!-- Acórdeão -->
        <div class="accordion" id="accordion">

            <div class="row">
							@foreach($faqs as $faq)
                <!-- Cartão -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="headingOne{{ @$faq->id }}">
                            <h5 class="mb-0">
                                <!-- Pergunta 1 -->
                                <button class="btn btn-link" data-toggle="collapse" data-target="#card{{ @$faq->id }}"
                                    aria-expanded="false" aria-controls="card{{ @$faq->id }}">
                                    {{$faq->questions}}
                                </button>
                            </h5>
                        </div>
                        <div id="card{{ @$faq->id }}" class="collapse" aria-labelledby="headingOne{{ @$faq->id }}" data-parent="#accordion">
                            <!-- Resposta 1 -->
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

$('.collapse').collapse('hide');

</script>

@endsection
