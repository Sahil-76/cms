<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            background-image: url("https://images.pexels.com/photos/333850/pexels-photo-333850.jpeg?auto=compress&cs=tinysrgb&w=400");
             /* background-image: url("https://ems.tka-in.com/img/on_time.gif");  */
          background-size: cover;
          opacity: 0.6;
        }

        .form-container {
            max-width: 500px;
            margin: 20% auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
           
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container button[type="submit:Back"] {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button[type="submit:Back"]:hover {
            background-color: #0056b3;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav col-11" id='navbarCollapse' collapse navbar-collapse>
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                        class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                @auth
                    <a href="{{ url('/') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                  @endauth
            </li>
   
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>


        </ul>
        <ul class="nav col-1">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    {{ auth()->user()->name ?? '' }}
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    {{-- <a class="dropdown-item" href="{{ route('changePassword') }}"> --}}
                    {{-- <i class="ti-settings text-primary"></i>
                    Change Password
                </a> --}}

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>




    <div class="container">

        <div class="form-container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h1>Create Students</h1>
                <hr>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

             


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
        
                </div>
                

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
              
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>

                </div>

                <label for="Contact">Contact</label>
                <input type="tel" class="form-control" name="contact" id="contact" required ><br><br>

                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image" required ><br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
           
                        
            </form>
            </div>

                <div class="form-group">
        
                    {{-- <a href="{{ route('students.edit') }}" class="btn btn-primary">Back</a> --}}
                    <form action="/action_page.php">
                    

                </div>
            </form>
        </div>
    </div>
</body>
</html>
