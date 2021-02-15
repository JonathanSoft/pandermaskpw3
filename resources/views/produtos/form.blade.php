<div class="row">
    <div class="col-12">
        <label for="descricao">Descrição:</label>
        <input type="descricao" name="descricao" id="descricao" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="categoria">Categoria: </label>
        <select name="categoria_id" id="categoria" class="form-control">
            <option value="0">Selecione uma categoria!</option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="tamanho">Tamanho: </label>
        <select name="tamanho" id="tamanho" class="form-control">
            <option value="0">Selecione um tamanho!</option>
            @foreach(\App\Models\Produto::TAMANHO as $key => $value )
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="generomasc">Genero: </label>
        <select name="generomasc" id="generomasc" class="form-control">
            <option value="0">Feminino</option>
            <option value="1">Masculino</option>
        </select>
    </div>
</div>

    <div class="row">
        <div class="col-4">
            <label for="vlrproduto">Valor:</label>
            <input type="number" step="0.01" name="vlrproduto" id="" class="form-control">
        </div>
        <div class="col-4">
            <label for="estoque">Estoque:</label>
            <input type="number" step="1" name="estoque" id="" class="form-control">
        </div>
        <div class="col-4">
            <label for="image">Imagem:</label>
            <input type="file" name="image" id="" class="form-control">
        </div>
    </div>


<div class="row" style="margin-top: 10px">
    <divc class="col-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('produtos.index')}}" class="btn btn-danger">Cancelar</a>
    </divc>
</div>
