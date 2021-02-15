@extends('main')

@section('content')
    <h2>    Cadastro de Categorias - Nova Categoria</h2>
    <form action="{{route('categorias.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="descricao">Descrição:</label>
                <input type="descricao" name="descricao" id="" class="form-control">
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
