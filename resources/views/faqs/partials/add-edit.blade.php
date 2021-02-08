<div class="form-group">
    <label for="inputDescription">Questão</label>
    <textarea class="form-control" name="nome_beat" id="inputDescription">{{old('questions',$portfolios->nome_beat)}}</textarea>
</div>
<div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="descricao" id="inputDescription">{{old('descricao',$faq->questions)}}</textarea>
</div>
<div class="form-group">
    <label for="inputDescription">Type</label>
    <textarea class="form-control" name="tipo" id="inputDescription">{{old('answers',$faq->answers)}}</textarea>
</div>