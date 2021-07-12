<!-- Slider -->
<link rel="stylesheet" type="text/css" href="js/slider/themes/default/jquery.slider.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/slider/jquery.slider.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".slider").slideshow({
            width      : 620,
            height     : 400,
            pauseOnHover : false,
            transition : ['slideLeft', 'slideRight', 'slideTop', 'slideBottom']
        });
        
        $(".caption").fadeIn(300);

        // playing with events:
        
        $(".slider").bind("sliderChange", function(event, curSlide) {
            $(curSlide).children(".caption").hide();
        });
        
        $(".slider").bind("sliderTransitionFinishes", function(event, curSlide) {
            $(curSlide).children(".caption").fadeIn(300);
        });
    });
</script>

<div class="slider">
    <div>
        <img src="images/slider/bg1.PNG" alt=""/>
    </div>
    
    <div>
        <img src="images/slider/bg2.PNG" alt=""/>
    </div>
    
    <div>
        <img src="images/slider/bg3.PNG" alt=""/>
    </div>
</div>