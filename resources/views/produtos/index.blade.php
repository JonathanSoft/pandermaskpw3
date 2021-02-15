
@extends('main')

@section('content')
    <p><a href="{{route('produtos.create')}}" class="btn btn-success">Add Produto</a></p>
    <table class="table table hover">
        <thead>
        <tr>
            <th>Imagem</th>
            <th>Descrição</th>
            <th>Preço</th>


            <th> - </th>
        </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td><img src="{{asset('/storage/produtos/'.$produto->image)}}" width="100px" height="100px" alt=""></td>
                <td><a href="{{route('produtos.show', $produto)}}">{{$produto->descricao}}</a></td>
                <td>{{$produto->vlrproduto}}</td>

                <td>
                    <a href="{{route('produtos.edit',$produto)}}" class="btn btn-primary"><span class="material-icons icon-image-preview">edit</span></a>
                    <form action="{{route('produtos.destroy',$produto)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir" title="Excluir"><span class="material-icons icon-image-preview">delete</span></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection()
