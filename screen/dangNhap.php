<link rel="stylesheet" type="text/css" href="css/register_login.css"/>

<?php
    if (isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $query_ad = mysqli_query($conn, "SELECT * FROM admin");
        $data = mysqli_fetch_array($query_ad);
        if($user != $data['tenDN'])
        {
            $sqlKH = "SELECT * FROM khachHang WHERE tenDN = '$user' AND matKhau = '$pass' ";
            $query_kh = mysqli_query($conn, $sql);
            $result = mysqli_num_rows($query_kh);
            if($result == 0)
            {
                echo "<script language='javascript' type='text/javascript'>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
                // $data = mysqli_fetch_array($query_login);
                // $_SESSION['makh'] = $data["maKH"];
                
            }
            else
            {
                $_SESSION['user'] = $user;
                header("Location: index.php");           
            }
        }
        else
        {
            if ($pass == $data['matKhau']){
                $userAd = $data['tenDN'];
                $_SESSION['userAd'] = $userAd;
                header("Location: admin/index.php");

            }
        }
    }
?>

<div class="box">
    <h3 class="text-uppercase text-center my-4">Đăng Nhập</h3>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label user">Tên đăng nhập</label>
            <input type="text" class="form-control username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label pass">Mật khẩu</label>
            <input type="password" class="form-control password" name="password">
        </div>
        <div class="btn-middle">
            <input type="submit" class="btn btn-block" name="login" value="Đăng Nhập" />
            <input type="submit" class="btn btn-block cancel" value="Hủy" />
        </div>
        <p>Bạn chưa có tài khoản? <a href="?thamso=dangKy">Đăng ký</a> | <a href="?thamso=doiMK">Quên mật khẩu</a></p>
    </form>
</div>