<div class="page">
    <div class="container app-content">
        <div class="jumbotron jumbotron-fluid mt-3">
            <div class="container">
                <h3 class="display-6 text-center">Live Data Virus Covid19 Indonesia</h3>
            </div>
        </div>
        <h3 class="text-center">Indonesia</h3>
        <hr>
        <div class="row mx-auto">
            <?php
            foreach ($indonesia as $id) {
            ?>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p class="mb-0">TOTAL POSITIF</p>
                                    <h2 class="mb-0"><?= $id['positif'] ?></h2>
                                    <p class="mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto">
                                    <img src="<?= base_url() ?>assets/uploads/sad.png" width="50" height="50" alt="Positif">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p class="mb-0">TOTAL SEMBUH</p>
                                    <h2 class="mb-0"><?= $id['sembuh'] ?></h2>
                                    <p class="mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto">
                                    <img src="<?= base_url() ?>assets/uploads/smile.png" width="50" height="50" alt="Sembuh">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p class="mb-0">TOTAL DIRAWAT</p>
                                    <h2 class="mb-0"><?= $id['dirawat'] ?></h2>
                                    <p class="mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto">
                                    <img src="<?= base_url() ?>assets/uploads/pray.png" width="50" height="50" alt="Dirawat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p class="mb-0">TOTAL MENINGGAL</p>
                                    <h2 class="mb-0"><?= $id['meninggal'] ?></h2>
                                    <p class="mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto">
                                    <img src="<?= base_url() ?>assets/uploads/cry1.png" width="50" height="50" alt="Meninggal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <h3 class="text-center mt-3">Data Per-Provinsi</h3>
        <hr>
        <div class="card-border">
            <div class="table-responsive" style="height: 600px;">
                <table class="table table-bordered table-hover" fixed-header>
                    <thead>
                        <tr class="bg-primary" style="color:white">
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Positif</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($provinsi); $i++) {
                        ?>
                            <tr>
                                <td> <?= $i + 1 ?></td>
                                <td> <?= $provinsi[$i]['attributes']['Provinsi'] ?></td>
                                <td> <?= $provinsi[$i]['attributes']['Kasus_Posi'] ?></td>
                                <td> <?= $provinsi[$i]['attributes']['Kasus_Semb'] ?></td>
                                <td> <?= $provinsi[$i]['attributes']['Kasus_Meni'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>