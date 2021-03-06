
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner3.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner2.jpg" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/banner4.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner1.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner3.jpg" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     


		<!-- SECTION -->
		<div class="section mainn mainn-raised">
		
		
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/product08.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Bán chạy</h3>
								<a href="product.php?p=78" class="cta-btn">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=72"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/macbook3.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Nổi bật</h3>
								<a href="product.php?p=72" class="cta-btn">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=79"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/hp1.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Mới nhất</h3>
								<a href="product.php?p=79" class="cta-btn">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		  
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm mới</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>Mới</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<span> VND</span></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i>Thêm vào giỏ hàng</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm bán chạy</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Macbook</a></li>
									<li><a data-toggle="tab" href="#tab2">Hp</a></li>
									<li><a data-toggle="tab" href="#tab2">Asus</a></li>
									<li><a data-toggle="tab" href="#tab2">Lenovo</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<span> VND</span></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i>Thêm vào giỏ hàng</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Bán chạy</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>

							<div id="get_product_home2">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">DANH MỤC</p>
										<h3 class="product-name"><a href="#">Acer Swift 5 SF514 53T 51EX i5 8265U (NX.H7KSV.001)</a></h3>
										<h4 class="product-price">23500000 <span>VND</span></del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">DANH MỤC</p>
										<h3 class="product-name"><a href="#">Acer Swift 5 SF514 53T 51EX i5 8265U (NX.H7KSV.001)</a></h3>
										<h4 class="product-price">23500000 <span>VND</span></del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">DANH MỤC</p>
										<h3 class="product-name"><a href="#">Acer Swift 5 SF514 53T 51EX i5 8265U (NX.H7KSV.001)</a></h3>
										<h4 class="product-price">23500000 <span>VND</span></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Nổi bật</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
							<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">DANH MỤC</p>
										<h3 class="product-name"><a href="#">Acer Swift 5 SF514 53T 51EX i5 8265U (NX.H7KSV.001)</a></h3>
										<h4 class="product-price">23500000 <span>VND</span></del></h4>
									</div>
								</div>

							</div>

							<div>
								
							<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/hp4.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">HP i5 laptop</a></h3>
										<h4 class="product-price">19.400.000 VNĐ </h4>
									</div>
								</div>
							
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs">
					    
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Xu hướng</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/asus1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">Asus ZenBook Duo UX482EG i5 1135G7 (KA166T)</a></h3>
										<h4 class="product-price">15.000.000 VNĐ </h4>
									</div>
								</div>
								
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/hp4.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">HP i5 laptop</a></h3>
										<h4 class="product-price">19.400.000 VNĐ </h4>
									</div>
								</div>
								
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/macbook2.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">Apple Macbook Pro 2019 Touch i5 2.4GHz/8GB/256GB</a></h3>
										<h4 class="product-price">40.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/hp2.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">HP Pavilion Gaming 15 dk1159TX i7 10750H</a></h3>
										<h4 class="product-price">39.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->
								

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/hp1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">HP Pavilion 15 eg0505TU i5 1135G7 (46M02PA)</a></h3>
										<h4 class="product-price">19.890.000 VNĐ </h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/macbook1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Danh mục</p>
										<h3 class="product-name"><a href="#">MacBook Air M1 2020 Silver (MGN93SA/A)</a></h3>
										<h4 class="product-price">34.980.000 VNĐ</h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
		