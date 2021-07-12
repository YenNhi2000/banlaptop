<?php
    $sql = "SELECT * FROM hang" ;
    $hangsp = mysqli_query($conn, $sql);
?>
<link rel="stylesheet" type="text/css" href="css/left.css"/>

<div class="menuleft">
    <ul class="list-group">
        <li class="list-group-item">An active item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
    </ul>
    <!-- <div class="list-group">
        <label class="list-group-item">Các hãng nổi bật</label>
        <?php 
            // while($row = mysqli_fetch_array($hangsp)) { ?>
            <a href='?thamso=sanPham' class="list-group-item list-group-item-action">
                <?php
                    // echo $row['tenHang']; 
                ?>
                <input type="hidden" name="maHang" value="<?php 
                // echo $row['maHang']; ?>">
            </a>
        <?php 
    // } 
    ?>
    </div> -->
    <!-- <form action="" method="post" name="hangsp">
        <input name="MaHang" type="hidden" value="" />
        <input name="gia" type="hidden" value="" />
        <input name="view" type="hidden" value="sanpham" />
    </form>

    <script>
        function loaiqua_onsubmit(thamso)
        {
            loaiqua.MaHang.value = thamso
            loaiqua.view.value = "sanpham"
            loaiqua.submit()
        }
        
        function timgia_onsubmit(gia)
        {
            loaiqua.gia.value = gia
            loaiqua.view.value = "sanpham"
            loaiqua.submit()	
        }
    </script> -->

    <!-- <div class="list-group">
        <label class="list-group-item"> Giá sản phẩm </label>
        <div class="giasp">
            <a href="#" class="list-group-item list-group-item-action" onclick="timgia_onsubmit('mot')"> Dưới 10 triệu </a>
            <a href="#" class="list-group-item list-group-item-action" onclick="timgia_onsubmit('hai')"> 10 - 15 triệu </a>
            <a href="#" class="list-group-item list-group-item-action" onclick="timgia_onsubmit('ba')"> 15 - 20 triệu</a>
            <a href="#" class="list-group-item list-group-item-action" onclick="timgia_onsubmit('bon')"> 20 - 25 triệu</a>
            <a href="#" class="list-group-item list-group-item-action" onclick="timgia_onsubmit('nam')"> Trên 25 triệu</a>
        </div>
    </div> -->
</div>