<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product Page</h1>
    <form method="POST" action="{{ route('product.update', [ 'id' => $product->id ]) }}">
        @csrf
        <input placeholder="Name" name="name" value="{{ $product->name }}"/>
        <input placeholder="Price" name="price" value="{{ $product->price }}"/>
        <button>
            submit
        </button>
    </form>
</body>

</html>
