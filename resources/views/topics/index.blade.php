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
                        <h1>Topic Page</h1>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('topics.create') }}"> Create Category </a>
                        <a class="btn btn-success" href="{{ route('topics.create') }}"> Back </a>

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
                    <th>Category_id </th>
                    <th>Category name </th>

                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topics as $topic)
                    <tr>
                        <td>{{ $topic->id }}</td>
                        <td>{{ $topic->name }}</td>
                        <td>{{$topic->category_id}}</td>
                        <td>{{ $topic->category->name}}</td>
                        
                        {{-- <td>{{ $topic->created_at }}</td>
                        <td>{{ $topic->updated_at }}</td> --}}
                        {{-- <td>{{ $topic->options }}</td> --}}
                    
                        <td>
                            <form action="{{ route('topics.destroy',$topic->id) }}" method="Post">

                                <a class="btn btn-primary" href="{{ route('topics.edit',$topic->id) }}">Edit</a>

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
</html>
