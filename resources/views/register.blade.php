<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .password-requirements {
      font-size: 12px;
      color: #6c757d;
      text-align: center;
      margin-top: 5px;
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
      color: black;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
      color: white;
      border-radius: 12px;
      transform: translateY(-4px);
    }
  </style>
</head>

<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

  <div class="card shadow-lg rounded-4 w-100" style="max-width: 800px;">
    <div class="card-body p-4">
      <div class="text-center mb-4">
        <h1 class="h4 text-dark">Buat Akun Baru</h1>
        <p class="text-muted">Silakan isi formulir berikut untuk mendaftar</p>
      </div>

      <form action="/register/check" method="POST">
        @csrf
        <div class="row g-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Nama Lengkap</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap"
                required>
            </div>
          </div>

          <div class="col-md-6">
            <label for="phone" class="form-label">Nomor HP</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor handphone"
                required>
            </div>
          </div>

          <div class="col-md-6">
              <label for="email" class="form-label">Alamat Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    placeholder="nama@contoh.com" value="{{ old('email') }}" required>
                </div>
              @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
          </div>

          <div class="col-md-6">
            <label for="password" class="form-label">Kata Sandi</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" id="password" placeholder="Buat kata sandi" name="password"
                required>
            </div>
            <p class="password-requirements">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</p>
          </div>

          <div class="col-md-6">
            <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" id="confirm-password" name="password_confirmation"
                placeholder="Ulangi kata sandi" required>
            </div>
          </div>
        </div>

        <div class="mt-4">
          {!! app('captcha')->display() !!}
          @if ($errors->has('g-recaptcha-response'))
            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
          @endif
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-4 fs-4">Daftar</button>

      </form>

      <div class="text-center mt-3">
        <small class="text-muted">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></small>
      </div>
    </div>
  </div>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>