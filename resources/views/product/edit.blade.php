@extends('layout.master')
@section('content')
    <h1>Edit Product Page</h1>
    <form method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
        @csrf
        <input placeholder="Name" name="name" value="{{ $product->name }}" />
        <input placeholder="Price" name="price" value="{{ $product->price }}" />
        <button>
            submit
        </button>
    </form>
@endsection
