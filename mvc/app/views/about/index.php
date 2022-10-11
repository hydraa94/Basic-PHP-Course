<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3 mt-5 shadow">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">About Me</h1>
            <img src="<?= BASEURL; ?>img/nailul.png" alt="Nailul" width="200" class="border border-5 rounded-circle shadow">
            <p class="col-md-8 fs-4">Halo saya adalah <?= $data['nama']; ?> <br>
                Saya adalah seorang <?= $data['pekerjaan']; ?></p>
            <a class="btn btn-primary btn-lg" role="button" href="<?= BASEURL ?>about/page">Learn More</a>
        </div>
    </div>
</div>