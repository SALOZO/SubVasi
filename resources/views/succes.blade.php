<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Dikirim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        .success-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
        }
        .success-icon {
            font-size: 4rem;
            color: #198754;
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .btn-success {
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
        }
        .alert-success {
            border-radius: 10px;
            background-color: #f0fff4;
            border: none;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 p-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card success-card p-4 text-center">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi bi-check-circle-fill success-icon"></i>
                        </div>
                        <h4 class="card-title text-success mb-3">Berhasil Dikirim!</h4>
                        <p class="card-text text-muted mb-4">Pengajuan Anda sudah berhasil dikirim dan akan segera kami proses.</p>
                        
                        <div class="alert alert-success py-2 mb-4" role="alert">
                            <small>
                                <i class="bi bi-clock-history me-1"></i>
                                 <strong>3 detik</strong>...
                            </small>
                        </div>

                        <div class="progress mb-4" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('index') }}" class="btn btn-success">
                                <i class="bi bi-house-door me-1"></i>Kembali ke Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <meta http-equiv="refresh" content="3;url={{ route('index') }}">
</body>
</html>