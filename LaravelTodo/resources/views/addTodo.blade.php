@auth
    
<!doctype html>
<html lang="en">
    
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>
    
    <body class="bg-light">
        
        <header class=' py-3 mb-4 border-bottom bg-white'>
            <div class='d-flex flex-wrap justify-content-center container'>
                <a href={{route('homePage')}} class='d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none'>
                    
                    <span class='fs-4'>Todo List</span>
                </a>
                
                <ul class='nav nav-pills'>
                <li class='nav-item'><a href='{{ route('homePage') }}' class='nav-link active' aria-current='page'>Home</a></li>
                <li class='nav-item'><a href='{{ route('addTodo') }}' class='nav-link text-dark'>Add Todo</a></li>
                <li class='nav-item'><a href='{{ route('logout') }}' class='nav-link bg-danger text-white'>Logout</a>
                </li>
                <li class='nav-item p-2 pr-2'>{{ App\Http\Controllers\UserController::getUserEmail() }}</li>
            </ul>
        </div>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card bg-white rounded border shadow">
                    <div class="card-header px-4 py-3">
                        <h4 class="card-title">Add todo</h4>
                    </div>
                    <div class="card-body p-4">
                        
                        
                        <form action="/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                placeholder="e.g. Create a C Program" />
                                @error('title')
                                <p class="alert alert-danger error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="desc" rows="3" value>
                                    @error('desc')
                                    <p class="alert alert-danger error">{{ $message }}</p>
                                    @enderror</textarea>
                                </div>
                                <input type="number" name="user_id" id="user_id" value={{session() -> get('user_id')}} hidden>
                                <div>
                                    <button type="submit" name="addTodo" class="btn btn-primary me-2">Add todo</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

@endauth