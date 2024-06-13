<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $product->nombre }}</p>
    <p><strong>Valor:</strong> {{ $product->valor }}</p>
    <p><strong>Cantidad:</strong> {{ $product->cantidad }}</p>
    <a href="{{ route('products.edit', $product->id) }}">Editar</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{ route('products.index') }}">Volver a la lista de productos</a>
</body>
</html>