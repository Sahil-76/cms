<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Index Page</title>
</head>

<body>
    <div class="container mt-2">
        <center>
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h1>Category Index Page</h1>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('categories.create') }}"> Create Category </a>
                        <a class="btn btn-success" href="{{ route('categories.create') }}"> Back </a>

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
                    <th>Created_at</th>
                    <th>updated_at</th>


                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>


                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                {{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}

                                <button type=" Edit"> <a class="btn btn-primary"
                                        href="{{ route('categories.edit', $category->id) }}">Edit </a></button>
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</html>
