<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Edit Pendaftaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Pendaftaran</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Edit Pendaftaran</h3>
      </div>
      <div class="card-body">
        <form action="<?= base_url('pendaftaran/update/' . $pendaftaran['idpendaftaran']); ?>" method="POST">

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $pendaftaran['nama']; ?>" required>
          </div>

          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $pendaftaran['tgl_lahir']; ?>" required>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" required><?= $pendaftaran['alamat']; ?></textarea>
          </div>

          <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" class="form-control" name="telp" id="telp" value="<?= $pendaftaran['telp']; ?>" required>
          </div>

          <div class="form-group">
            <label for="keluhan">Keluhan Penyakit</label>
            <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?= $pendaftaran['keluhan']; ?>" required>
          </div>

          <div class="form-group">
            <label for="tgl_pendaftaran">Tanggal Pendaftaran</label>
            <input type="date" class="form-control" name="tgl_pendaftaran" id="tgl_pendaftaran" value="<?= $pendaftaran['tgl_pendaftaran']; ?>" required>
          </div>

          <div class="form-group">
            <label for="tgl_kunjung">Tanggal Kunjungan</label>
            <input type="date" class="form-control" name="tgl_kunjung" id="tgl_kunjung" value="<?= $pendaftaran['tgl_kunjung']; ?>" required>
          </div>

          <div class="form-group">
            <label for="waktu_kunjungan">Waktu Kunjungan</label>
            <input type="time" class="form-control" name="waktu_kunjung" id="waktu_kunjung" value="<?= date('H:i', strtotime($pendaftaran['waktu_kunjung'])); ?>" required>
          </div>

          <div class="form-group">
            <label for="nama_dokter">Dokter</label>
            <select class="form-control" name="nama_dokter" id="nama_dokter" required>
              <option value="">Pilih Dokter</option>
              <?php foreach ($nama_dokter as $dk): ?>
                <option value="<?= $dk->iddokter; ?>" <?= ($dk->iddokter == $pendaftaran['iddokter']) ? 'selected' : ''; ?>>
                  <?= $dk->nama_dokter; ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-secondary">Batal</a>
          </div>

        </form>
      </div>
    </div>
  </section>
</div>
