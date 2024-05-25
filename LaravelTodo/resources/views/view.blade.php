@auth
    

<!doctype html>
<html lang="en">
    
    <head>
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
            <div class="row">
                <main>
                    <h1>{{$todo->title}}</h1>
                    <p class="fs-5 col-md-8">{{$todo->description}}</p>
                    
                    <div class="mb-5">
                        <a href={{route('edittodo', $todo->id)}} class="btn btn-primary btn-lg px-4 me-2">Edit</a>
                        <a href={{route('delete', $todo -> id)}} class="btn btn-danger btn-lg px-4">Delete</a>
                    </div>
                    
                    
                </main>
                
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>

</html>
@endauth