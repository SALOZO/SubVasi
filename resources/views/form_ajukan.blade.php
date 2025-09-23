<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Inovasi - Subvasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .innovation-container {
            max-width: 800px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            width: 100%;
        }
        
        .innovation-header {
            background: linear-gradient(135deg, #3d1ad9 0%, #6f42c1 100%);
        }
        
        .file-upload {
            border: 2px dashed #dee2e6;
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .file-upload:hover {
            border-color: #3d1ad9;
            background-color: #f8f9fa;
        }
        
        .btn-primary {
            background-color: #3d1ad9;
            border-color: #3d1ad9;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #2a14b3;
            border-color: #2a14b3;
        }
        
        .character-count {
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card innovation-container">
        <div class="card innovation-container">
            <div class="card-header text-white text-center innovation-header">
                <h2 class="mb-2"><i class="bi bi-lightbulb"></i> Ajukan Inovasi</h2>
                <p class="mb-0">Bagikan ide inovatif Anda untuk menciptakan perubahan positif</p>
            </div>
            
            <div class="card-body">
                <div id="alertPlaceholder">
                </div>
                <form id="innovationForm" action="/pengajuan/submit" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Judul Inovasi -->
                    <div class="mb-4">
                        <label for="judul" class="form-label fw-semibold">Judul Ide/Inovasi</label>
                        <input type="text" class="form-control form-control-lg" id="judul" name="judul" placeholder="Masukkan judul inovasi Anda" required>
                        <div class="form-text">Buat judul yang menarik dan deskriptif</div>
                    </div>
                    
                    <!-- Deskripsi Inovasi -->
                    <div class="mb-4">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Ide/Inovasi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Jelaskan detail inovasi Anda, termasuk tujuan, manfaat, dan implementasinya" required></textarea>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-text">Jelaskan secara detail dan jelas</div>
                        </div>
                    </div>
                    
                    <!-- Upload File Proposal -->
                    <div class="mb-4">
                        <label for="proposal" class="form-label fw-semibold">Upload File Proposal</label>
                        <div class="file-upload p-3 mb-3">
                            <input type="file" id="proposal" name="proposal" accept=".pdf" class="form-control" required>
                            <p class="text-muted small mt-2">Maksimal ukuran file: 5MB</p>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary btn-lg">Ajukan Inovasi</button>
                        <a href="/index" class="btn btn-outline-secondary btn-lg">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>