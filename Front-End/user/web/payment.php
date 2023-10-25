<?php include 'connection.php';
		include 'header.php';
		
		$uemail=$_SESSION['sess_user'];
		if(!isset($uemail))
		{
			session_start();
			header("Location:index.php");
		}
		else
		{
			
			
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:29:11 GMT -->
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



</div>

    <!--/Header-->
    <!--//Header-->
    <section class="w3mid-gap"></section>
    <!--/Banner-Start-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Products </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="dashboard.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Products </li>
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
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <!-- about -->
                <div class="ecom-contenthny-w3lcheckout privacy">
                    <!-- payment -->
                    <h3>Payment</h3>

                    <div class="checkout-right mt-4">
                        <!--Horizontal Tab-->
						 <?php
					
							$q1 = "SELECT * FROM order_table WHERE ORDER_STATUS = 1 AND EMAIL_ID='$uemail'";
							$run2 = mysqli_query($con,$q1);
							$value2 = mysqli_fetch_array($run2);
							$count = mysqli_num_rows($run2);
							if($count>0)
							{
						?>
					<div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                
                                <li>Credit/Debit</li>

                            </ul>
                            <div class="resp-tabs-container hor_1">

                                
                                <div>
                                    <form method="post" class="creditly-card-form agileinfo_form information-wrapper">
                                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                            <div class="credit-card-wrapper">
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Name on Card</label>
                                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                    </div>
                                                    <div class="w3_agileits_card_number_grids">
                                                        <div class="w3_agileits_card_number_grid_left">
                                                            <div class="controls">
                                                                <label class="control-label">Card Number</label>
                                                                <input class="number credit-card-number form-control" type="text" name="number"  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                            </div>
                                                        </div>
                                                        <div class="w3_agileits_card_number_grid_right">
                                                            <div class="controls">
                                                                <label class="control-label">CVV</label>
                                                                <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                            </div>
                                                        </div>
                                                        <div class="clear"> </div>
                                                    </div>
                                                    <div class="controls">
                                                        <label class="control-label">Expiration Date</label>
                                                        <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                    </div>
                                                </div>
                                                <div class="buyhny-now">
								<input type="submit" name="pay" value="Make a Payment" class="btn btn-style btn-primary">
									</div>
									
												
												</div>
                                        </section>
                                    </form>
									
                                </div>
                                <?php
										$ans = "SELECT * FROM order_table WHERE EMAIL_ID = '$uemail' AND ORDER_STATUS='1'"; 
											$run = mysqli_query($con,$ans);
											$value = mysqli_fetch_array($run);
											
											$count1 = mysqli_num_rows($run);
							
											if($count1>0) 
									{
											$pid = $value['PRODUCT_ID'];
											
											$ans1 = "SELECT * FROM products_table WHERE PRODUCT_ID = '$pid' "; 
											$run1 = mysqli_query($con,$ans1);
											$value1 = mysqli_fetch_array($run1);
											$rid = $value1['LOGIN_ID'];
											
										
										if(isset($_POST['pay']))
										{
											$q1 = "UPDATE order_table SET ORDER_STATUS = 0 WHERE EMAIL_ID = '$uemail'";
											$sql=mysqli_query($con,$q1);
											
											date_default_timezone_set("Asia/Calcutta");
											$createdate=date('Y-m-d H:i:s');
											
											$q = "INSERT INTO payment_table (PAYER_TO_ID,PAYER_FROM_ID,PAYMENT_DATE) VALUES ('$rid','$uemail','$createdate')";
											$sql=mysqli_query($con,$q);
											if($sql)
											{
												echo "<script> alert('Payment Done Successfully');</script>";?>
											<section class="w3layouts-errorhny">
        <div class="w3l-error-grid py-5 text-center">
            <div class="container py-lg-4">
                <div class="error-block">
                    <h3>Thank You For Shopping With Us!</h3>
                    <h4>Your Order Will Be Delivered Soon</h4>
                    

                    <a href="products.php" class="btn btn-style btn-primary mt-4"> <span class="fa fa-arrow-left me-2"></span> Continue to basket</a>
                </div>
            </div>
        </div>
    </section>	
												<?php
											}
											else
											{
												echo "<script> alert('Payment Not Done');</script>";?>
												 <section class="w3layouts-errorhny">
        
    </section>
												<?php
											}
										}
									}

							}
							else
							{
						?>
                                
								<section class="w3layouts-errorhny">
									<div class="w3l-error-grid py-5 text-center">
									<div class="container py-lg-4">
									<div class="error-block">
									
									<h2>Your Cart is Empty</h2>
                    

                    <a href="products.php" class="btn btn-style btn-primary mt-4"> <span class="fa fa-arrow-left me-2"></span> Continue to basket</a>
                </div>
            </div>
        </div>
    </section>
	<?php
							} ?>
	

                            </div>
                        </div>
                        <!--Plug-in Initialisation-->
                        <!-- // Pay -->
                    </div>
                </div>
            </div>
            <!-- //payment -->
        </div>
    </section>
    <!-- //products-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!--/w3l-footer-29-main-->
    
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- js -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- easy-responsive-tabs -->
    <script src="assets/js/easyResponsiveTabs.js"></script>
    <!-- //easy-responsive-tabs -->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });

    </script>
    <!-- credit-card -->
    <script type="text/javascript" src="assets/js/creditly.js"></script>

    <script type="text/javascript">
        $(function() {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function(e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });

    </script>
    <!-- //credit-card -->
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:29:17 GMT -->
</html>
<?php
	include 'footer.php';
			
		}
		
 		?>