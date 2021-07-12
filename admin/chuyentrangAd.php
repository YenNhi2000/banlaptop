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
		case "QLHang":
			include('screen/qlHang.php');
			break;
		case "QLSanPham":
			include('screen/qlSanPham.php');
			break;
		case "QLDatHang":
			include('screen/qlDatHang.php');
			break;
		case "QLKhachHang":
			include('screen/qlKhachHang.php');
			break;
		case "QLDoanhThu":
			include('screen/qlDoanhThu.php');
			break;
		case "thongTin":
			include('screen/thongTin.php');
			break;
		case "dangXuat":
			include('screen/dangXuatAd.php');
			break;
		// default:
        //     include("./screen/qlHang.php");
	}
?>