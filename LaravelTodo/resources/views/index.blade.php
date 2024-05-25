<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(262deg, rgba(2, 0, 36, 1) 0%, rgba(14, 71, 77, 1) 14%, rgba(0, 242, 255, 1) 100%);
        }
    </style>

    <title>Todo List</title>
</head>

<body>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Sign up to store your todos</h1>
                <p class="col-lg-10 fs-4">Create your account to manage your todos.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form action="{{ route('login') }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-light"
                    id="userForm" name="userForm">
                    @csrf
                    <div class="mb-3">

                        <label for="email">Email address</label>
                        <input type="text" name="email" class="form-control p-3" id="emailInput"
                            placeholder="name@example.com" />
                        @error('email')
                            <p class="alert alert-danger error">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class=" mb-3">

                        <label for="passwordInput">Password</label>
                        <input type="password" name="password" class="form-control p-3" id="passwordInput"
                            placeholder="Password" />
                        @error('password')
                            <p class="alert alert-danger error">{{ $message }}</p>
                        @enderror


                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
