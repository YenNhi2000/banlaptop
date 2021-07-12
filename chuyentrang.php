<?php	
	if(isset($_GET['thamso']))
	{
		$tham_so = $_GET['thamso'];
	}
	else
	{
		$tham_so="";
	}
	switch($tham_so)
	{
		// case "gioiThieu":
		// 	include('../BCcloud/screen/gioiThieu/gioiThieu.php');
		// 	break;
		// case "gioHang":
		// 	include('../BCcloud/screen/gioHang/gioHang.php');
		// 	break;
		case "dangNhap":
			include('./screen/dangNhap.php');
			break;
		case "dangKy":
			include('./screen/dangKy.php');
			break;
		// case "sanPham":
		// 	include('../BCcloud/screen/sanPham/sanPham.php');
		// 	break;
		// case "thongTin":
		// 	include('../BCcloud/screen/taiKhoan/thongTin.php');
		// 	break;
		// case "capNhat":
		// 	include('../BCcloud/screen/taiKhoan/capNhat/capNhat.php');
		// 	break;
		// case "doimk":
		// 	include('../BCcloud/screen/taiKhoan/doiMK/doiMK.php');
		// 	break;
		// case "dangXuat":
		// 	include('../BCcloud/screen/dangXuat.php');
		// 	break;
		// case "xlDangNhap":
		// 	include('../BCcloud/screen/taiKhoan/dangNhap/xlDangNhap.php');
		// 	break;
		default:
            include("../banlaptop/screen/trangChu.php");
	}
?>