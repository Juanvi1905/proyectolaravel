<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $product->nombre }}"><br><br>
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" value="{{ $product->valor }}"><br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="{{ $product->cantidad }}"><br><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('products.index') }}">Volver a la lista de productos</a>
</body>
</html>