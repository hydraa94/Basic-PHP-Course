<div class="container mt-4">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
    <div class="p-5 mb-5 bg-light rounded-3 mt-4 shadow">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Button Trigger Tambah Data -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Data Siswa
                    </button>
                    <br><br>
                    <div class="row">
                        <div class="col">
                            <form action="<?= BASEURL ?>siswa/cari" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Ketik data yang akan dicari..." name="keyword" id="keyword" aria-label="cari" aria-describedby="cari" autocomplete="off">
                                    <button class="btn btn-outline-primary" type="submit" id="cari">Cari Data</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <br>
                    <!-- Tabel Siswa -->
                    <h3>Daftar Siswa</h3>
                    <ul class="list-group shadow">
                        <?php foreach ($data['siswa'] as $ssw) : ?>
                            <li class="list-group-item ">
                                <?= $ssw['nama'] ?>
                                <a href="<?= BASEURL ?>siswa/detail/<?= $ssw['id']; ?>" class="badge text-bg-primary float-end text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?= $ssw['id'] ?>">Detail</a>

                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah-->
<div class=" modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>Siswa/tambah" method="post">
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
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>