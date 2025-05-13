<!doctype html>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        {{-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="row justify-content-center align-items-center g-2 py-5">
            <div class="col-6 border border-primary rounded-3">
                <form action="{{ route('register.store') }}" method="post">
                    <h4>register</h4>
                    @csrf
                    <div class="pb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{old('name')}}" id="name"
                            class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="name" />
                        <label class="invalid-feedback">@error('name') {{$message}} @enderror</label>

                    </div>
                    <div class="pb-3">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{old('email')}}" id="email"
                            class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="email" />
                        <label class="invalid-feedback">@error('email') {{$message}} @enderror</label>
                    </div>
                    <div class="pb-3">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password"
                            class="form-control @if($errors->has('password')) is-invalid @endif"
                            placeholder="password" />
                        <label class="invalid-feedback">@error('password') {{$message}} @enderror</label>

                    </div>
                    <div class="pb-3">
                        <label for="password_confirmation">Conferm Password:</label>
                        <input type="password" name="password_confirmation"
                            id="password_confirmation @if($errors->has('password_confirmation')) is-invalid @endif"
                            class="form-control" placeholder="password confirmation" />
                    </div>
                    <button type="submit" class="btn btn-outline-success">register</button>
                </form>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>