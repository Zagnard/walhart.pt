<div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{old('nome',$services->nome)}}" />
</div>
<div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('descricao',$services->descricao)}}</textarea>
</div>
<div class="form-group">
    <label for="inputPrice">Price</label>
    <input class="form-control" name="price" id="inputPrice">{{old('preco',$services->preco)}}</input>
</div>