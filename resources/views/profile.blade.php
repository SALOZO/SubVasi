<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Auth::user()->name }} | Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .profile-card {
            max-width: 600px;
            margin: 2rem auto;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .profile-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            text-align: center;
            padding: 2rem 1rem;
        }
        .profile-avatar {
            width: 100px;
            height: 100px;
            border: 3px solid #fff;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        .profile-body {
            padding: 1.5rem;
        }
        .profile-body .form-control {
            background: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="card profile-card">
            <div class="profile-header">
                <img src="{{ $prof->foto}}" 
                     alt="Profile Picture" 
                     class="profile-avatar">
                <h3 class="mb-0">{{ Auth::user()->name }}</h3>
            </div>

            <div class="profile-body">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telpon</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->no_telp }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sekolah</label>
                    <input type="text" class="form-control" value="{{ $prof->sekolah }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Desa</label>
                    <input type="text" class="form-control" value="{{ $prof->desa->nama ?? '-' }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" value="{{ $prof->desa->kecamatan->nama ?? '-' }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kabupaten</label>
                    <input type="text" class="form-control" value="{{ $prof->desa->kecamatan->kabupaten->nama ?? '-' }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Provinsi</label>
                    <input type="text" class="form-control" value="{{ $prof->desa->kecamatan->kabupaten->provinsi->nama ?? '-' }}" readonly>
                </div>


                
                <a href="{{ route('index') }}" class="btn btn-secondary w-100">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</body>
</html>
