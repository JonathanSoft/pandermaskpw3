@extends('main')

@section('content')

    <h2>    Cadastro de Produtos - Alterar Produto</h2>
    <form action="{{route('produtos.update', $produto)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12">
                <label for="descricao">Descrição:</label>
                <input type="descricao" name="descricao" id="" class="form-control" value="{{$produto->descricao}}">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="categoria">Categoria: </label>
                <select name="categoria_id" id="categoria" class="form-control" >
                    <option value=""></option>
                    @foreach($categorias as $categoria)
                        @isset($produto)
                            @if($categoria->id == $produto->categoria->id)
                                <option value="{{$categoria->id}}" selected="true">{{$categoria->descricao}}</option>
                            @else
                                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                            @endif
                        @else
                            <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                        @endisset
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="tamanho">Tamanho: </label>
                <select name="tamanho" id="tamanho" class="form-control">
                    <option value="">{{$produto->tamanho}}</option>
                    @foreach(\App\Models\Produto::TAMANHO as $key => $value )
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="generomasc">Genero: </label>
                <select name="generomasc" id="generomasc" class="form-control"">
                @isset($produto)
                    @if($produto->genero == "0")
                        <option value="0" selected="true">Feminino</option>
                        <option value="1">Masculino</option>
                    @else
                        <option value="0" >Feminino</option>
                        <option value="1" selected="true">Masculino</option>
                    @endif
                @else
                    <option value="0">Feminino</option>
                    <option value="1">Masculino</option>
                    @endisset
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="vlrproduto">Valor:</label>
                <input type="number" step="0.01" name="vlrproduto" id="" class="form-control" value="{{$produto->vlrproduto}}">
            </div>
            <div class="col-4">
                <label for="estoque">Estoque:</label>
                <input type="number" step="1" name="estoque" id="" class="form-control" value="{{$produto->estoque}}">
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
    </form>

@endsection
