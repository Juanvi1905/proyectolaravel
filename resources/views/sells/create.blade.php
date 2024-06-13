<!-- resources/views/sells/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sell</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add Sell</h1>
        <form action="{{ route('sells.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cedula">Cedula:</label>
                <input type="number" id="cedula" name="cedula" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_product">Product:</label>
                <select id="id_product" name="id_product" class="form-control" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Sell</button>
        </form>
    </div>
</body>
</html>
