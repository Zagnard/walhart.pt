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
<div class="form-group">
    <label for="inputbeat_audio">Audio</label>
    <input type="file" class="form-control-file" name="beat_audio" id="inputbeat_audio" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file audio. mp3 file. </small>
</div>