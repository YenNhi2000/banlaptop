<link rel="stylesheet" type="text/css" href="../css/header.css"/>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <form class="d-flex">
                <input class="form-control" type="search" placeholder="Bạn tìm gì..." aria-label="Search">
                <input type="image" src="../images/search.png">
            </form>

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?thamso=gioiThieu">Giới thiệu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?thamso=gioHang">Giỏ hàng</a>
                </li>

            <?php
                if(isset($_SESSION['user']))
                {
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào, <?php echo $_SESSION['user']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?thamso=thongTin">Thông tin cá nhân</a></li>
                        <li><a class="dropdown-item" href="?thamso=doimk">Đổi mật khẩu</a></li>
                        <li><a class="dropdown-item" href="?thamso=dangXuat">Đăng xuất</a></li>
                    </ul> 
                </li>
            <?php
                }
                else
                {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="?thamso=dangNhap">Đăng nhập</a>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
    </div>
</nav>