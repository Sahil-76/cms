<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Topic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        @if (session('success'))
            <div class="alert alert-success mb-1 mt-1"
                style="background-color: #dff0d8; border-color: #d0e9c6; color: #3c763d;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <center><h1>Edit Courses</h1></center>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required value="{{ $course->name }}">
            </div>

            <div class="form-group">
                <label for="created_at">Created At:</label>
                <input type="datetime-local" name="created_at" id="created_at" required
                    value="{{ $course->created_at }}">
            </div>

            <div class="form-group">
                <label for="updated_at">Updated At:</label>
                <input type="datetime-local" name="updated_at" id="updated_at" required
                    value="{{ $course->updated_at }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>

