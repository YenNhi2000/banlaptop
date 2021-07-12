<link rel="stylesheet" type="text/css" href="../style.css"/>

<?php
    $userAd = $_SESSION['userAd'];
    $strSQL = "SELECT * FROM admin WHERE tenDN = '{$userAd}' ";
    $query_ad = mysqli_query($conn, $strSQL);
    $row = mysqli_fetch_array($query_ad);
?>

<div class="box_info">
    <h3>Thông Tin Admin</h3>
    <form action="?thamso=capNhat" method="POST">
        <div class="row">
            <div class="col-3">
                <label class="form-label">Họ và tên:</label>
            </div>
            <div class="col">
			    <?php echo $row['hoTen']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label class="form-label">Số điện thoại:</label>
            </div>
            <div class="col">
                <?php echo $row['sdt']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label class="form-label">Địa chỉ:</label>
            </div>
            <div class="col">
                <?php echo $row['diaChi']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label class="form-label">Email:</label>
            </div>
            <div class="col">
                <?php echo $row['email']; ?>
            </div>
        </div>
        <div class="btn-middle">
            <input type="submit" class="btn btn-block" name="register" value="Thay Đổi Thông Tin" />
            <input type="submit" class="btn btn-block cancel" value="Hủy" />
        </div>
    </form>
</div>