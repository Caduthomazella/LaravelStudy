@extends('admin.layouts.app')

@section('title', "Gestao Produtos {$products->name}")

@section('content')

    <h1>Produto {{ $products->name }} <a href="{{ route('products.index') }}"></a></h1>

    <ul>
        <li><strong>Nome: </strong>{{ $products->name }}</li>
        <li><strong>Preço: </strong>{{ $products->price }}</li>
        <li><strong>Descrição: </strong>{{ $products->description }}</li>
    </ul>
    
    <div class="d-flex justify-content-start">
        <a href="{{route('products.index')}}" class="btn btn-light mr-2">Voltar</a>
        <form action="{{ route('products.destroy', $products->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar o Produto {{ $products->name }}</button>
        </form>
    </div>
    

@endsection