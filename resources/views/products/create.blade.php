<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Nuevo Producto</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="valor">Valor:</label><br>
        <input type="text" id="valor" name="valor"><br>
        <label for="cantidad">Cantidad:</label><br>
        <input type="text" id="cantidad" name="cantidad"><br>
        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>