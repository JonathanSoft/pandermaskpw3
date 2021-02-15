@extends('main')

@section('content')
    <h2>    Cadastro de Categorias - Dados da Categoria</h2>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="descricao">Descrição:</label>
                <input type="descricao" name="descricao" id="" class="form-control" value="{{$categoria->descricao}}" disabled>
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <div class="col-12 text-left">
                <a href="{{route('categorias.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        </div>
    </form>
@endsection
