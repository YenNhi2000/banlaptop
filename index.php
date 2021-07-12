<?php
    session_start();
    include('dbconfig.php');
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Website bán laptop</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="header sticky-top">
        <?php include('includes/header.php'); ?>
    </div>

    <div class="main">
        <div class="container">
            <div class="left">
                <?php include('includes/left.php'); ?>
            </div>

            <div class="middle">
                <?php include('chuyentrang.php'); ?>
            </div>

            <div class="right">
                <?php include('includes/right.php'); ?>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>