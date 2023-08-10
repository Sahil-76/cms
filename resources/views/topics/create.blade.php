<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Document</title>

   <style>

 </style>

</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('topics.store') }}" method="POST">
            @csrf
         
            <div class="mb-3">
                <label for="name" class="form-label">Topic Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
        
            <div class="mb-3">
                <label for="category_id" class="form-label">Category:</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Topic</button>
        </form>
    </div>
</body>
</html>
