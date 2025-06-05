<?php session_start(); ?>

<!DOCTYPE html>
<html data-theme="light">
    <head>
        <title>ADAMAS | Arsip Data Mahasiswa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="./style.css" />
        <script src="https://kit.fontawesome.com/d689ec13b6.js" crossorigin="anonymous"></script>
        <script src="./script.js"></script>
        <script src="./notifications/script.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    </head>
    <body>
        <section class="hero has-background-black-ter is-small">
            <div class="hero-body">
                <p class="title has-text-warning">
                    ADAMAS
                </p>
                <p class="subtitle has-text-warning is-family-monospace">
                    Arsip Data Mahasiswa
                </p>
            </div>
        </section>

       <?php include("./buttons/buttons.php"); ?>

       <?php if (array_key_exists('isExisted', $_SESSION)) {
            if ($_SESSION['isExisted']) {
                include("./notifications/failed.php");
            } else {
                include("./notifications/success.php");
            }
            session_unset();
            session_destroy();
        } elseif (array_key_exists('isExistedDel', $_SESSION)) {
            if ($_SESSION['isExistedDel']) {
                include("./notifications/success.php");
            } else {
                include("./notifications/failed.php");
            }
            session_unset();
            session_destroy();
        } ?>

       <?php include("./entries/read_table.php"); ?>

       <?php include("./modals/add_modal.php"); ?>

       <?php include("./modals/delete_modal.php"); ?>
    </body>
</html>