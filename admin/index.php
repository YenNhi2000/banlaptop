<?php
    session_start();
    include('../dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Website bán laptop</title>
    <link rel="stylesheet" type="text/css" href="../admin/style.css"/>
    <link rel="stylesheet" type="text/css" href="../admin/quanLy.css"/>

    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
        if(!isset($_SESSION['userAd']) || ($_SESSION['userAd']=="")) { 
            include('screen/dangNhapAd.php');
        }
        else{
    ?>
            <div class="main">
                <div class="header sticky-top">
                    <?php include('../admin/header.php'); ?>
                </div>

                <div class="middle">
                    <div class="left">
                        <?php include('../admin/left.php'); ?>
                    </div>
                    <div class="right">
                        <?php include('../admin/chuyentrangAd.php'); ?>
                    </div>
                </div>

                <div class="footer">
                    <?php include('../admin/footer.php'); ?>
                </div>
            </div>
    <?php } ?>
</body>
</html>