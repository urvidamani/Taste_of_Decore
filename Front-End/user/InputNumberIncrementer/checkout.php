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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:28:26 GMT -->
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
                    <h3>Chec<span>kout</span></h3>
                    <div class="checkout-right">
                        <?php
							$q1 = "SELECT * FROM order_table WHERE ORDER_STATUS = 0";
							$run2 = mysqli_query($con,$q1);
							$value2 = mysqli_fetch_array($run2);
							
							if($value2)
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
							}
							else
							{
						?>
                        <table class="timetable_sub">
                            <thead>
							<?php
								$ans = "select * from order_table where EMAIL_ID = '$uemail' and ORDER_STATUS='1'";
								$run = mysqli_query($con,$ans);
								$value = mysqli_fetch_array($run);
								$pid = $value['PRODUCT_ID'];
								
								$ans1 = "select * from products_table where PRODUCT_ID = '$pid'";
								$run1 = mysqli_query($con,$ans1);
								while($value1 = mysqli_fetch_array($run1))
								{
							?>
                                <tr>
                                    
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Product Name</th>

                                    <th>Price</th>
									<th>Total</th>
                                    
                                </tr>
								
                            </thead>
							
                            <tbody>
								
								<tr class="rem1">
								
                                    
                                    <td class="invert-image"><a href="product_single.php">
                                            <img src="../../retailer/ret_img/<?php echo $value1['PRODUCT_IMAGE']; ?>" class="img-fluid radius-image" alt=""></a></td>
                                    
                                    <td class="invert"><?php $quantity =  $value['QUANTITY']; echo $quantity;?></td>
									<td class="invert"><?php echo $value1['PRODUCT_NAME']; ?></td>

                                    <td class="invert"><?php $price = $value1['PRODUCT_PRICE']; echo $price; ?></td>
									<td class="invert"><?php $total = 0;  $total = $quantity*$price; echo $total; ?></td>
                                    
                                </tr>
                                
                               

                            </tbody>
							
                        </table>
                    </div>
					<?php
									}
								?> 
                    <div class="row checkout-left mt-5">
                        <div class="col-md-4 checkout-left-basket">
                            <h4>Continue to basket</h4>
							<?php $ans1 = "select * from products_table where PRODUCT_ID = '$pid'";
								$run1 = mysqli_query($con,$ans1);
								while($value1 = mysqli_fetch_array($run1))
								{
								?>
                            <ul>
                                
                              
                                <li>Sub Total <i>-</i> <span><?php $total = 0; $total=$total+($quantity*$price); echo $total;?></span></li>
								
                            </ul>
							<?php
								}
							?>
                        </div>
                        <div class="col-md-8 address_form_agile ps-lg-5">
                            <h4>Add a new Details</h4>
                            <form method="post" class="creditly-card-form agileinfo_form mt-4">
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">

                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">

                                                        <input class="form-control" type="text" placeholder="Mobile number">
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">

                                                        <input class="form-control" type="text" name="Add" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">

                                                <input class="form-control" type="text" placeholder="Town/City">
                                            </div>
                                            <div class="controls">

                                                <select class="form-control option-w3ls">
                                                    <option>Office</option>
                                                    <option>Home</option>
                                                    <option>Commercial</option>

                                                </select>
                                            </div>
                                        </div>
                                        <button class="submit check_out btn btn-style btn-primary" name="del">Delivery to this Address</button>
                                    </div>
                                </section>
                            </form>
							<?php if(isset($_POST['del']))
							{
								$add = $_POST['Add'];
								$q = "UPDATE order_table SET ADDRESS='$add' WHERE EMAIL_ID='$uemail'";
								//$q = "INSERT INTO order_table (ADDRESS) VALUES ('$add')";
								$sql=mysqli_query($con,$q);
								if($sql)
								{
									echo "inserted";
								}
								else
								{
									echo "data not inserted";
								}
							}?>
                            <div class="checkout-right-basket">
                                <a class="btn btn-style btn-primary" href="payment.php">Make a Payment <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //about -->
            </div>
        </div>
    </section>
    <!-- //products-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- js -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });

    </script>
    <!--quantity-->
    <script>
        $(document).ready(function(c) {
            $('.close1').on('click', function(c) {
                $('.rem1').fadeOut('slow', function(c) {
                    $('.rem1').remove();
                });
            });
        });

    </script>
    <script>
        $(document).ready(function(c) {
            $('.close2').on('click', function(c) {
                $('.rem2').fadeOut('slow', function(c) {
                    $('.rem2').remove();
                });
            });
        });

    </script>
    <script>
        $(document).ready(function(c) {
            $('.close3').on('click', function(c) {
                $('.rem3').fadeOut('slow', function(c) {
                    $('.rem3').remove();
                });
            });
        });

    </script>

    <!-- //js -->
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:29:00 GMT -->
</html>
<?php
	include 'footer.php';
							}
	}
?>