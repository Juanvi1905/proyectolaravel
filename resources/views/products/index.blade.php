<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <a href="{{ route('products.create') }}">Crear Producto</a>
    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->nombre }} - {{ $product->valor }} - {{ $product->cantidad }}
                <a href="{{ route('products.show', $product->id) }}">Ver</a>
                <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>