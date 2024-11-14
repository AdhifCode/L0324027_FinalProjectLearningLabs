<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">To-Do List</h1>
        <form action="{{ route('tugases.store') }}" method="POST" class="d-flex my-3">
            @csrf
            <input type="text" name="title" class="form-control me-2" placeholder="Add new tugas" required>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <ul class="list-group">
            @foreach ($tugases as $tugas)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $tugas->title }}
                    <form action="{{ route('tugases.destroy', $tugas->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
