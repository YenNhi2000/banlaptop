<div class="khachhang">
    <h3>Quản lý khách hàng</h3>
    <form action="" method="POST">
        <table border="1">
            <tr align="center" style="background-color: #bdbdbd;">
                <th>STT</th>
                <th>Mã KH</th>
                <th>Họ tên KH</th>
                <th colspan="2">Thao tác</th>
            </tr>            
        <?php
            $stt = 1;
            $query_kh = mysqli_query($conn, "SELECT * FROM khachHang");
            while($data = mysqli_fetch_array($query_kh)) {
        ?>
            <tr>
                <td align="center" width="60px"><?php echo $stt; ?></td>
                <td align="center" width="90px"><?php echo $data['maKH']; ?></td>
                <td align="left" width="300px" style="padding: 0 5px;"><?php echo $data['hoTenKH']; ?></td>
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