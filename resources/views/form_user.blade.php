<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lengkapi Profil - Subvasi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .photo-preview {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

  <div class="card w-100" style="max-width: 600px;">
    <div class="card-header text-center bg-primary text-white">
      <h4 class="mb-0">Lengkapi Profil Anda</h4>
    </div>
    <div class="card-body">
      <form id="profileForm" action="{{ route('profile_submit') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Asal Sekolah -->
        <div class="mb-3">
          <label for="sekolah" class="form-label">Asal Sekolah</label>
          <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Nama sekolah Anda" required>
        </div>

        <!-- Domisili -->
        <div class="row g-3">
          <div class="col-md-6">
            <label for="provinsi" class="form-label">Provinsi</label>
            <select class="form-select" name="provinsi_id" id="provinsi" required>
              <option value="" selected disabled>Pilih Provinsi</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
            <select class="form-select" name="kabupaten_id" id="kabupaten" disabled required>
              <option value="" selected disabled>Pilih Kabupaten/Kota</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <select class="form-select" name="kecamatan_id" id="kecamatan" disabled required>
              <option value="" selected disabled>Pilih Kecamatan</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="desa" class="form-label">Desa/Kelurahan</label>
            <select class="form-select" id="desa" name="desa_id" disabled required>
              <option value="" selected disabled>Pilih Desa/Kelurahan</option>
            </select>
          </div>
        </div>

        <!-- Foto Profil -->
        <div class="text-center my-4">
          <input type="file" id="foto" name="foto" accept="image/*" class="form-control mb-3">
          <img id="preview" class="photo-preview" src="https://placehold.co/120x120/e9ecef/6c757d?text=Foto"
            alt="Preview">
        </div>

        <button type="submit" class="btn btn-primary w-100">Simpan Profil</button>
      </form>
    </div>
  </div>

  @if(session('warning'))
<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        {{ session('warning') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        var myModal = new bootstrap.Modal(document.getElementById('successModal'));
        myModal.show();
    });
</script>
@endif

  {{-- JQUERY --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>

    // Load provinsi
    $.getJSON('/provinsi', function (data) {
      $('#provinsi').append(
        data.map(p => `<option value="${p.id}">${p.nama}</option>`)
      );
    });

    // Provinsi change → load kabupaten
    $('#provinsi').change(function () {
      let provinsiId = $(this).val();
      $('#kabupaten').prop('disabled', false).html('<option>Pilih Kabupaten</option>');
      $('#kecamatan').prop('disabled', true).html('<option>Pilih Kecamatan</option>');
      $('#desa').prop('disabled', true).html('<option>Pilih Desa</option>');

      $.getJSON(`/kabupaten/${provinsiId}`, function (data) {
        $('#kabupaten').append(
          data.map(r => `<option value="${r.id}">${r.nama}</option>`)
        );
      });
    });

    // Kabupaten change → load kecamatan
    $('#kabupaten').change(function () {
      let kabupatenId = $(this).val();
      $('#kecamatan').prop('disabled', false).html('<option>Pilih Kecamatan</option>');
      $('#desa').prop('disabled', true).html('<option>Pilih Desa</option>');

      $.getJSON(`/kecamatan/${kabupatenId}`, function (data) {
        $('#kecamatan').append(
          data.map(d => `<option value="${d.id}">${d.nama}</option>`)
        );
      });
    });

    // Kecamatan change → load desa
    $('#kecamatan').change(function () {
      let kecamatanId = $(this).val();
      $('#desa').prop('disabled', false).html('<option>Pilih Desa</option>');

      $.getJSON(`/desa/${kecamatanId}`, function (data) {
        $('#desa').append(
          data.map(v => `<option value="${v.id}">${v.nama}</option>`)
        );
      });
    });

  $('#foto').change(function () {
  if (this.files && this.files[0]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      $('#preview').attr('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  }
  });
  </script>

</body>

</html>