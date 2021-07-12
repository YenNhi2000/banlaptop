<div class="quanLy">
    <h3>Quản lý khách hàng</h3>
    <form action="" method="POST">
        <table border="1">
            <tr align="center" style="background-color: #bdbdbd;">
                <th>STT</th>
                <th>Mã hãng</th>
                <th>Tên hãng</th>
                <th>Hình</th>
                <th colspan="2">Thao tác</th>
            </tr>            
        <?php
            $stt = 1;
            $query_kh = mysqli_query($conn, "SELECT * FROM hang");
            while($data = mysqli_fetch_array($query_kh)) {
        ?>
            <tr>
                <td align="center" width="60px"><?php echo $stt; ?></td>
                <td align="center" width="90px"><?php echo $data['maHang']; ?></td>
                <td align="left" width="250px" style="padding: 0 5px;"><?php echo $data['tenHang']; ?></td>
                <td align="center" width="120px"><img src="../images/logo/<?php echo $data['hinh']; ?>"></td>
                <td align="center" width="120px"><a href="?thamso=ttKhachHang">Xem</a></td>
                <td align="center" width="120px"><a href="#">Xóa</a></td>
            </tr>
        <?php 
            $stt++;
            }
        ?>
        </table>
    </form>
</div>