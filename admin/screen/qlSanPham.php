<div class="quanLy">
    <h3>Quản lý sản phẩm</h3>
    <form action="" method="POST">
        <table border="1">
            <tr align="center" style="background-color: #bdbdbd;">
                <th>STT</th>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Thuộc hãng</th>
                <th colspan="2">Thao tác</th>
            </tr>            
        <?php
            $stt = 1;
            $query_sp = mysqli_query($conn, "SELECT * FROM sanPham, hang where sanPham.maHang = hang.maHang");
            while($data = mysqli_fetch_array($query_sp)) {
        ?>
            <tr>
                <td align="center" width="60px"><?php echo $stt; ?></td>
                <td align="center" width="90px"><?php echo $data['maSP']; ?></td>
                <td align="left" width="300px" style="padding: 0 5px;"><?php echo $data['tenSP']; ?></td>
                <td align="center" width="130px"><?php echo $data['tenHang']; ?></td>
                <td align="center" width="90px"><a href="?thamso=suaSP">Sửa</a></td>
                <td align="center" width="90px"><a href="#">Xóa</a></td>
            </tr>
        <?php 
            $stt++;
            }
        ?>
        </table>
    </form>
</div>