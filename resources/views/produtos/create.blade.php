@extends('main')

@section('content')
    <h2>    Cadastro de Produtos - Novo Produto</h2>
    <form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @include('produtos.form')

    </form>

@endsection
