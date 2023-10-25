<?php
	session_start();
	
	if(!isset($_SESSION['sess_user']))
	{
		
		header("Location:index.php");
	}
	else
	{
		$uemail=$_SESSION['sess_user'];
		include 'connection.php';
	include 'header.php';
	
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:28:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Taste of Decor</title>
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>


    
    <section class="w3mid-gap"></section>
    <!--/Banner-Start-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Single </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Single Page</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-ecommerce-main-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <section class="w3l-ecommerce-main">
	
	
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
		
            <div class="container py-lg-5">
                <!--/row1-->
				<?php 
				$id=$_GET['page_id'];
				$ans = "SELECT * FROM products_table WHERE PRODUCT_ID='$id'";
							$run = mysqli_query($con,$ans);
							
							
							while($value=mysqli_fetch_array($run))
							{
								$rid=$value['LOGIN_ID'];
				?>
                <div class="sp-store-single-page row">
                    <div class="col-lg-5 single-right-left">
                        <div class="flexslider1">

                            <ul class="slides">
                                <li data-thumb="assets/images/cart1.jpg">
                                    <div class="thumb-image"> <img height="250" width="350" src="../../retailer/ret_img/<?php echo $value['PRODUCT_IMAGE']; ?>" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
                 
					<div class="col-lg-7 single-right-left ps-lg-5">
                        <h3><?php
							echo $value['PRODUCT_NAME'];
						?>
                        </h3>
                        <div class="caption">

                            <ul class="rating-single">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star-half-o yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star-half yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
							<br>
                            <h4>
                                <span class="item_price"><p>Rs. <?php echo $value['PRODUCT_PRICE'];?></p></span>
                                
                            </h4>
                        </div>
                        <br>
                        <div class="desc_single mb-4">
                            <h5>Description : </h5>
                            <p><?php echo $value['DESCRIPTION'];?></p>
                        </div>
                        
						 <form Method="POST">
							  <input type="number" id="quantity" name="quan" min="1" max="100"><br><br>
							  
							 	  <div class="buyhny-now">
							<input class="btn btn-style btn-primary" type="submit" name="sub" value="Buy Now"></div>
						</form>
                        

                    </div>
                </div>
            </div>
            <!--//row1-->

        </div>
    </section>
    
    <!-- //products-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- FlexSlider -->
    <!-- price range (top products) -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script>
        //<![CDATA[ 
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>

    </script>
    <!-- //price range (top products) -->
    <script src="assets/js/jquery.flexslider.js"></script>
    <!-- single -->
    <script src="assets/js/imagezoom.js"></script>
    <!-- single -->
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });

    </script>
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        shopv.render();

        shopv.cart.on('shopv_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });

    </script>
    <!-- //cart-js -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:28:26 GMT -->
</html>
<?php
	}
	if(isset($_POST['sub']))
							{
								
								//session_start();
								
								//$email=$_SESSION['sess_user'];
								//$uid=$_SESSION['sess_user'];

								$q=$_POST['quan'];
								
								date_default_timezone_set("Asia/Calcutta");
								$createdate=date('Y-m-d H:i:s');
								
								$status=1;
								
								$pid=$_GET['page_id'];
							
			
								$q = "INSERT INTO order_table (EMAIL_ID,QUANTITY,ORDER_DATE,ORDER_STATUS,PRODUCT_ID,LOGIN_ID) VALUES ('$uemail','$q','$createdate','$status','$pid','$rid')";
								$sql=mysqli_query($con,$q);
								if($sql)
								{
									echo "<script> alert('Product Added To Your Cart');</script>";
								}
								else
								{
									echo "<script> alert('Product Not Added');</script>";
								}
							}
	
							
	include 'footer.php';
	
	}?>