<ul class="list-group">
    <li class="list-group-item lbl"><label>Danh mục quản lý</label></li>
    <li class="list-group-item"><a href="?thamso=QLHang">Quản Lý Hãng Laptop</a></li>
    <li class="list-group-item"><a href="?thamso=QLSanPham">Quản Lý Sản Phẩm</a></li>
    <li class="list-group-item"><a href="?thamso=QLDatHang">Quản Lý Đơn Đặt Hàng</a></li>
    <li class="list-group-item"><a href="?thamso=QLKhachHang">Quản Lý Khách Hàng</a></li>
    <li class="list-group-item"><a href="?thamso=QLDoanhThu">Quản Lý Doanh Thu</a></li>
</ul>

<?php include('./thongKe.php'); ?>
			
<div class="thongke">
    <label class="list-group-item">Thống kê</label>
    <span>Tổng Số Sản Phẩm:</span> <?php echo $soSP; ?> <br />
    <span>Số Khách Hàng:</span> <?php echo $khachhang; ?> <br />
    <span>Số Đơn Đặt Hàng:</span> <?php echo $dondathang; ?>
</div>