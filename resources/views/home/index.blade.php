<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 50px
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }



        a {
            text-decoration: none
        }

        .btn-delete {
            color: white;
            background-color: red;
            padding: 5px;
            border-radius: 5px;
        }

        .btn-edit {
            color: white;
            background-color: rgb(109, 109, 219);
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <a href="{{ route('product.create') }}">Create Product</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn-edit">Edit</a>
                </td>
                <td><a href="{{ route('product.trash', ['id' => $product->id]) }}" class="btn-delete">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
