<div class="container mt-2">

<div class="row">
<div class="col-lg-6">
<?php Flasher::flash(); ?>
</div>
</div>
<div class="row">
    <div class="col-lg-6">

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#forModal">
  Tambah Data Mahasiswa
</button>

    <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
            <li class="list-group-item">
            <?= $mhs['nama']; ?>
                <a href="<?= BASEURL?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge ms-1 btn btn-danger float-end" onclick="return confirm('Yakin hapus data ?')">Hapus</a>
                <a href="<?= BASEURL?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge ms-1 btn btn-success float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal">Edit</a>
                <a href="<?= BASEURL?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge ms-1 btn btn-primary float-end">Detail</a>
                
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        
        <label for="nama" class="form-label">Nama</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3">
</div>
        <label for="NPM" class="form-label">NPM</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="NPM" name="NPM" aria-describedby="basic-addon3">
</div>

<label for="email" class="form-label">Email</label>
<div class="input-group mb-3">
  <input type="email" class="form-control" id="email" name="email" aria-describedby="basic-addon3">
</div>
        <label for="jurusan" class="form-label">Jurusan</label>
        <select class="form-select" id="jurusan" name="jurusan" aria-label="jurusan">
  <option selected>Pilih Jurusan</option>
  <option value="Akuntansi">Akuntansi</option>
  <option value="Manajemen Informasi">Manajemen Informasi</option>
</select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
