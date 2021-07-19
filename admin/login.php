<link rel="stylesheet" type="text/css" href="../admin/style.css"/>

<?php
    if (isset($_POST["login"])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE tenDN = '$user' and matKhau = '$pass' ";
        $query = mysqli_query($conn, $sql);
        $rs = mysqli_num_rows($query);
        if ($rs > 0){
            $_SESSION['userAd'] = $user;
            header("Location: index.php");
        }
        else{
            echo "<script languge='javascript' type='text/javascript'>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
        }
    }
?>

<div class="page">
    <div class="box">
        <h3>Đăng Nhập Admin</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td class="tenTruong"><label> Tên đăng nhập </label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td class="tenTruong"><label> Mật khẩu </label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><a href="?thamso=doiMK">Quên mật khẩu ?</a></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="Đăng Nhập" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>