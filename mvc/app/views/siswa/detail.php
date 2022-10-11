<div class="container mt-3">
    <div class="card text-center" style="width: 20rem;">
        <div class="card-header">
            Detail Siswa
        </div>
        <div class="card-body">
            <input type="hidden" name="id" id="id">
            <img src="<?= BASEURL ?>img/<?= $data['siswa']['gambar'] ?>" class="card-img-top" alt="...">
            <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['nik']; ?></h6>
            <p class="card-text">Email: <?= $data['siswa']['email']; ?></p>
            <P class="card-text">Jenjang: <?= $data['siswa']['jenjang'] ?></P>
            <a href="<?= BASEURL; ?>siswa" class="card-text text-decoration-none">Kembail</a>
            <a href="<?= BASEURL; ?>siswa/ubah" class="card-text text-secondary text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formUbah" data-id="<?= $data['siswa']['id'] ?>">Ubah</a>
            <a class="card-text text-danger text-decoration-none" href="<?= BASEURL ?>siswa/hapus/<?= $data['siswa']['id'] ?>" onclick="return confirm('Hapus Data??');">Hapus</a>

        </div>
    </div>
</div>
<!-- Modal Ubah -->
</div>
<div class="modal fade" id="formUbah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Ubah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>siswa/ubah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        <label for="nama" class="form-label">NIK</label>
                        <input type="number" min="0" max="999999" class="form-control" id="nik" name="nik" autocomplete="off">
                        <label for="nama" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jenjang">Jenjang</label>
                        <select class="form-select" id="jenjang" name="jenjang">
                            <option selected value="0">Pilih Jenjang</option>
                            <option value="ESDEH">ESDEH</option>
                            <option value="ESEMPEH">ESEMPEH</option>
                            <option value="ESEMA">ESEMA</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>

            </div>
            </form>
        </div>
    </div>
</div>
</div>