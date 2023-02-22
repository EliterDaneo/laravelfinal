<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Pages</title>
</head>

<body>
    <div class="container">
        <div class="card-body">
            <div class="w-50 center border rounded px-3 py-3 mx-auto">
                <h1 class="text-center">
                    Register form
                </h1>
                @if (session('success'))
                    <p class="alert alert-success"> {{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger"> {{ $err }}</p>
                    @endforeach
                @endif
                <form action="{{ url('login/proses_register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Your Name</label>
                        <input type="text" name="name"
                            class="form-control
                        @error('name')
                          is-invalid
                        @enderror"
                            id="exampleInputName" aria-describedby="nameHelp" autofocus>
                        @error('name')
                            <div class="invalid_feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email"
                            class="form-control
                        @error('email')
                          is-invalid
                        @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid_feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control
                        @error('password')
                          is-invalid
                        @enderror"
                            id="exampleInputPassword1">
                        @error('password')
                            <div class="invalid_feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Repeat Password</label>
                        <input type="password" name="password1"
                            class="form-control
                        @error('password1')
                          is-invalid
                        @enderror"
                            id="exampleInputPassword2">
                        @error('password1')
                            <div class="invalid_feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <div class="text-center">
                        <a href="{{ url('login') }}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
