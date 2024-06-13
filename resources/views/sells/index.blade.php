<!-- resources/views/sells/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sells</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Sells</h1>
        <a href="{{ route('sells.create') }}" class="btn btn-primary mb-3">Add Sell</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Cedula</th>
                    <th>Product</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sells as $sell)
                    <tr>
                        <td>{{ $sell->id }}</td>
                        <td>{{ $sell->usuario }}</td>
                        <td>{{ $sell->cedula }}</td>
                        <td>{{ $sell->product->name }}</td>
                        <td>
                            <form action="{{ route('sells.destroy', $sell->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this sell?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
