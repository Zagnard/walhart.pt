<div class="form-group">
    <label for="inputnome_beat">Nome</label>
    <textarea class="form-control" name="nome_beat" id="inputnome_beat">{{old('nome_beat',$portfolios->nome_beat)}}</textarea>
</div>
<div class="form-group">
    <label for="inputdescricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputdescricao">{{old('descricao',$portfolios->descricao)}}</textarea>
</div>
<div class="form-group">
    <label for="inputtipo">Tipo</label>
    <textarea class="form-control" name="tipo" id="inputtipo">{{old('tipo',$portfolios->tipo)}}</textarea>
</div>