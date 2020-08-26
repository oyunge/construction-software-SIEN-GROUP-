{{-- @extends('layouts.app')

@section('content') --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIEN</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <div class="card-body">


                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1"
                                                            for="inputFirstName">{{ __('Name') }}</label>
                                                        <input
                                                            class="form-control py-4 @error('name') is-invalid @enderror "
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus id="inputFirstName" type="text"
                                                            placeholder="Enter Your name" />
                                                    </div>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="email">{{ __('E-Mail Address') }}</label>
                                                <input class="form-control py-4  @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    id="inputEmailAddress" type="email" aria-describedby="emailHelp"
                                                    placeholder="Enter email address" />
                                            </div>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror



                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1"
                                                            for="inputPassword">{{ __('Password') }}</label>
                                                        <input
                                                            class="form-control py-4 @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password"
                                                            id="inputPassword" type="password"
                                                            placeholder="Enter password" />
                                                    </div>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1"
                                                            for="inputConfirmPassword">{{ __('Confirm Password') }}</label>
                                                        <input class="form-control py-4" name="password_confirmation"
                                                            required autocomplete="new-password" id="inputConfirmPassword"
                                                            type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>

                                            {{-- <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block"
                                                    type="submit">{{ __('Register') }}</a></div> --}}
                                        </form>

                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="/login">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </main>
        </div>
        </div>
    </body>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>

{{-- 
@endsection --}}
