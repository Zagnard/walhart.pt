<div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{old('nome',$services->nome)}}" />
</div>
<div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('descricao',$services->descricao)}}</textarea>
</div>