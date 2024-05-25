@auth

<!doctype html>
<html lang="en">
    
    <head>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    
    <body>
        
        <header class=' py-3 mb-4 border-bottom bg-white'>
            <div class='d-flex flex-wrap justify-content-center container'>
                <a href={{route('homePage')}} class='d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none'>
                    
                    <span class='fs-4'>Todo List</span>
                </a>
                
                <ul class='nav nav-pills'>
                    <li class='nav-item'><a href='{{ route('homePage') }}' class='nav-link active'
                        aria-current='page'>Home</a></li>
                        <li class='nav-item'><a href='{{ route('addTodo') }}' class='nav-link text-dark'>Add Todo</a></li>
                        <li class='nav-item'><a href='{{ route('logout') }}' class='nav-link bg-danger text-white'>Logout</a>
                        </li>
                        <li class='nav-item p-2 pr-2'>{{ App\Http\Controllers\UserController::getUserEmail() }}</li>
            </ul>
        </div>
    </header>
    
    
    <div class="container">
        <h1 class="mb-4 text-center fw-bold">Your todos</h1>
        <div class="row">
            @foreach ($todo as $tododata )

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">{{$tododata->title}}</h4>
                    <p class="card-text">{{$tododata->description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('show', $tododata->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="{{ route('edittodo',$tododata->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        </div>
                        {{-- <small class="text-muted">' . $todo['date'] . '</small> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
</body>

</html>
@endauth