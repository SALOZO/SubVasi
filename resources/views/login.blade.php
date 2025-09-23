<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SubVasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            /* overflow-y: hidden; */
        }

        .login-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            margin: auto;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border: none;
        }

        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .btn-login {
            font-size: 0.9 rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            background-color: #0d6efd;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-4px);
            background-color: #0b5ed7;
            color: white;
            border-radius: 12px;
        }

        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 1.5rem 0;
        }
    </style>
</head>

<body>
    <div class="login-container ">
        <div class="card">
            <div class="card-body p-4 p-sm-5">
                <!-- Logo/Header -->
                <div class="text-center mb-4">
                    <i class="bi bi-person-circle" style="font-size: 3.5rem; color: #0d6efd;"></i>
                    <h4 class="my-3">Masuk ke Akun Anda</h4>
                    <p class="text-muted">Silakan masuk untuk melanjutkan</p>
                </div>

                <!-- Form Login -->
                <form method="POST" action="/login/check">
                    @csrf
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="nama@contoh.com" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Masukkan kata sandi" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="bi bi-eye"></i>
                            </button>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                      {!! app('captcha')->display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                         @endif

                        <!-- Submit/Regis Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-login btn-lg">Login</button>
                        </div>

                        <div class="text-center mt-3">
                            <span class="login-label">Don't have an account? </span>
                            <a href="/register" class="register-link">Register</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Ganti icon
            this.querySelector('i').classList.toggle('bi-eye');
            this.querySelector('i').classList.toggle('bi-eye-slash');
        });
    </script>
</body>

</html>
