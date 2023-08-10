<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Category Index Page</title>
</head>

<body>
    <div class="container mt-2">
        <center>
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h1>Courses Page</h1>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('courses.create') }}"> Create Category </a>
                        <a class="btn btn-success" href="{{ route('courses.create') }}"> Back </a>

                    </div>
                </div>
            </div>
        </center>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead bgcolor="Powderblue">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Topic Id</th>
                    {{-- <th>Created_at</th>
                    <th>updated_at</th>
                   --}}
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->topic_id}}</td>
                        
                        {{-- <td>{{ $topic->created_at }}</td>
                        <td>{{ $topic->updated_at }}</td> --}}
                        {{-- <td>{{ $topic->options }}</td> --}}
                       
                        <td>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                {{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}
                                
                                <button type=" button"> <a class="btn btn-primary" href="{{ route('courses.edit', $course->id) }}">Edit </a></button>
                                @csrf
                                @method('DELETE')

                                <button type="button" class="btn btn-danger">Danger</button>
                            
                                {{-- <button type="submit" >
                                    Delete
                                </button> --}}
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</html>
