@extends('admin.layouts.app')

@section('title', 'Gestao Produtos')

@section('content')
    <h1>Exibindo os produtos!</h1>

    <a href="{{ route('products.create') }}">Cadastrar novo produto</a>
@endsection
