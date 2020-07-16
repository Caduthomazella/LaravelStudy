@extends('admin.layouts.app')

@section('title', "Editar Produto")

@section('content')

    <div class="card mt-2">
        <div class="card-header">
            <h3>Editar Produto</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="post">
                @method('PUT')
                @include('admin.pages.products._partials.form')
            </form>
        
        </div>
    </div>

@endsection