<div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$service->nome)}}" />
</div>
<div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="descricao" id="inputDescription">{{old('descricao',$service->descricao)}}</textarea>
</div>
<div class="form-group">
    <label for="inputPrice">Price</label>
    <input class="form-control" name="preco" id="inputPrice" value="{{old('preco',$service->preco)}}"></input>
</div>