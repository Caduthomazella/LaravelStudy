@include('admin.includes.alerts')
@csrf
<div class="input-group mb-3">
    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome:" value="{{ $product->name ?? old('name') }}">
</div>
<div class="input-group mb-3">
    <input type="text" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Preço:" value="{{ $product->price ?? old('price')}}">
</div>
<div class="input-group mb-3">
    <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Descrição:" value="{{ $product->description ?? old('description')}}">
</div>
<div class="input-group mb-3">
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
        <label class="custom-file-label" for="inputGroupFile04">Clique para inserir uma imagem</label>
    </div>
</div>
<div class="form-group">
    <button class="btn btn-success" type="submit">Enviar</button>
</div>