<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />
        <title>Login</title>
    </head>
    <body>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-offset-4 col-md-4">
                    <h4>Login | Custom Auth</h4>
                    <hr />
                    <form action="{{ route('auth.chack') }}" method="POST">
                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                        @endif @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="exampleInputEmail1"
                                value="{{ old('email') }}"
                            />
                            <span class="text-danger"
                                >@error('email') {{ $message }} @enderror</span
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                                >Password</label
                            >
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                id="exampleInputPassword1"
                                value="{{ old('password') }}"
                            />
                            <span class="text-danger"
                                >@error("password"){{ $message }}@enderror</span
                            >
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary btn-block w-100"
                        >
                            Sign In
                        </button>
                        <br />
                        <br />
                        <a href="{{ route('auth.register') }}"
                            >I don't have an account, create new</a
                        >
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
