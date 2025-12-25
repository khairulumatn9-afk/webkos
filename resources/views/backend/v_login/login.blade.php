<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kos Digital | Login</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/icon_univ_bsi.png') }}">

    <!-- CSS -->
    <link href="{{ asset('backend/dist/css/style.min.css') }}" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background: linear-gradient(135deg, #0f766e, #14b8a6);
        }

        .auth-wrapper {
            min-height: 100vh;
        }

        .auth-box {
            width: 100%;
            max-width: 420px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,.2);
        }

        .login-title {
            color: #14b8a6;
            font-weight: 700;
        }

        .login-subtitle {
            font-size: 14px;
            color: #aaa;
        }

        .btn-login {
            width: 100%;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

<div class="main-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Login Wrapper -->
    <div class="auth-wrapper d-flex justify-content-center align-items-center">
        <div class="auth-box bg-dark p-4">

            <!-- Logo -->
            <div class="text-center mb-3">
                <img src="{{ asset('backend/images/logo.png') }}" width="70" alt="logo">
                <h3 class="login-title mt-3">Kos Digital</h3>
                <p class="login-subtitle">Silakan login untuk mengelola kos</p>
            </div>

            {{-- ALERT ERROR --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- FORM LOGIN --}}
           <form action="{{ route('login') }}" method="POST">

                @csrf

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white">
                            <i class="ti-email"></i>
                        </span>
                    </div>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control @error('email') is-invalid @enderror"
                           placeholder="Email"
                           required>
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white">
                            <i class="ti-lock"></i>
                        </span>
                    </div>
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password"
                           required>
                </div>

                <button type="submit" class="btn btn-success btn-login">
                    Login
                </button>
            </form>

            <div class="text-center mt-4">
                <small class="text-muted">
                    © {{ date('Y') }} Kos Digital
                </small>
            </div>

        </div>
    </div>
</div>

<!-- JS -->
<script src="{{ asset('backend/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script>
    $(".preloader").fadeOut();
</script>

</body>
</html>
