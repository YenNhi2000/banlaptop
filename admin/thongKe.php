<?php
	//dem so qua
	$strSQL = "SELECT COUNT(*) FROM sanPham";
	$so_sp = mysqli_query($conn,$strSQL);
	$rowSP = mysqli_fetch_array($so_sp);
	$soSP = $rowSP[0];

	//dem so khach hang
	$strSQL = "SELECT COUNT(*) FROM khachHang";
	$khach_hang = mysqli_query($conn, $strSQL);
	$rowKhach = mysqli_fetch_array($khach_hang);
	$khachhang = $rowKhach[0];

	//dem so don dat hang
	$strSQL = "SELECT COUNT(*) FROM dondathang";
	$donDH = mysqli_query($conn,$strSQL);
	$rowDDH = mysqli_fetch_array($donDH);
	$dondathang = $rowDDH[0];
?>