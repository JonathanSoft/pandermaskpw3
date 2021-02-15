@extends('main')

@section('content')

    <h2>    Cadastro de Categorias - Alterar Categoria</h2>
    <form action="{{route('categorias.update', $categoria)}}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12">
                <label for="descricao">Descrição:</label>
                <input type="descricao" name="descricao" id="" class="form-control" value="{{$categoria->descricao}}">
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <divc class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('categorias.index')}}" class="btn btn-danger">Cancelar</a>
            </divc>
        </div>
    </form>

@endsection
