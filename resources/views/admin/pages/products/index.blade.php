@extends('admin.layouts.app')

@section('title', 'Gestao Produtos')

@section('content')
    <h1>Exibindo os produtos!</h1>

    <div class="row">
        <div class="col d-flex justify-content-start">
            <form action="{{ route('products.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Filtrar:" class="form-control mr-1" value=" {{ $filters['filter'] ?? ''}} ">
                <button type="submit" class="btn btn-info">Pesquisar</button>
            </form>
        </div>
        <div class="col d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary mr-2">Cadastrar novo produto</a>
        </div>
    </div>
    <hr>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th width="100" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->image)
                            <img src="{{ url("storage/products/{$product->image}") }}" alt="{{ $product->name }}" style="max-width: 100px">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>R$: {{ $product->price }}.00</td>
                    <td class="d-flex justify-content-center">
                    <a class="btn btn-primary mr-1" href="{{ route('products.edit', $product->id) }}">Editar</a>
                    <a class="btn btn-secondary" href="{{ route('products.show', $product->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    @if (isset($filters))
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h5>{!! $products->appends($filters)->links() !!}</h5>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h5>{!! $products->links() !!}</h5>
            </div>
        </div>
    @endif

    
    

@endsection
