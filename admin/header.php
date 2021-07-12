<link rel="stylesheet" type="text/css" href="../css/header.css"/>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">

            <?php
                if(isset($_SESSION['userAd']))
                {
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào, <?php echo $_SESSION['userAd']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?thamso=thongTin">Thông tin cá nhân</a></li>
                        <li><a class="dropdown-item" href="?thamso=doimk">Đổi mật khẩu</a></li>
                        <li><a class="dropdown-item" href="?thamso=dangXuat">Đăng xuất</a></li>
                    </ul> 
                </li>
            <?php
                }
            ?>

            </ul>
        </div>
    </div>
</nav>