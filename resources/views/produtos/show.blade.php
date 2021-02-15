@extends('main')

@section('content')
    <h2>    Cadastro de Clientes - Visualizar dados do Produto</h2>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="descricao">Descrição:</label>
                <input type="descricao" name="descricao" id="descricao" class="form-control" value="{{$produto->descricao}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="categoria">Categoria: </label>
                <input type="categoria" name="categoria" id="categoria" class="form-control" value="{{$produto->categoria->descricao}}" disabled>

            </div>
            <div class="col-4">
                <label for="tamanho">Tamanho: </label>
                <input type="tamanho" name="tamanho" id="tamanho" class="form-control" value="{{$produto->tamanho}}" disabled>
            </div>
            <div class="col-4">
                <label for="generomasc">Genero: </label>
                <select name="generomasc" id="generomasc" class="form-control" value="{{$produto->generomasc}}" disabled>
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
                <input type="number" step="0.01" name="vlrproduto" id="" class="form-control" value="{{$produto->vlrproduto}}" disabled>
            </div>
            <div class="col-4">
                <label for="estoque">Estoque:</label>
                <input type="number" step="1" name="estoque" id="" class="form-control" value="{{$produto->estoque}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <td><img src="{{asset('/storage/produtos/'.$produto->image)}}" width="300px" height="300px" alt=""></td>
            </div>
        </div>




        <div class="row" style="margin-top: 10px">
            <div class="col-12 text-left">
                <a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        </div>
    </form>
@endsection
