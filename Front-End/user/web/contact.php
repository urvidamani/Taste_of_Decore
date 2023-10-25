<?php include 'connection.php';?>
<?php
					if(isset($_POST['send']))
					{
						
						$name = $_POST['Name'];
						$email = $_POST['Email'];
						$phone = $_POST['Phone_no'];
						$message = $_POST['Message'];
						
						date_default_timezone_set("Asia/Calcutta");
						$createdate=date('Y-m-d H:i:s');
			
						$query="INSERT INTO contact_us (name,email,phone,message,date) VALUES('$name','$email','$phone','$message','$createdate')";
						$sql=mysqli_query($con,$query);
						if($sql)
						{
							echo "<script>  alert('message sent successfully'); </script>";
						}
						else
						{
							echo "<script>  alert('message not sent'); </script>";
						}
					}
					error_reporting(E_ERROR | E_PARSE);
				?>
<!doctype html>
<html lang="en">
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


    <!--/Header-->
	<?php include 'header.php';?>
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
                            Contact Us </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <!-- /contacts -->
    <!-- contact-form 2 -->
    <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="title-content text-center">
                <h6 class="title-subw3hny mb-1">Get in touch</h6>
                <h3 class="title-w3l mb-5">Contact with our support <br>
                    during emergency!</h3>
            </div>

            <div class="contact-grids mt-5 pt-lg-3">
                <div class="contact-left">
                    <div class="row cont-details">
                        <div class="col-lg-4 col-md-6 cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address:</h6>
                                
								<p>No. 3,Honey Infinity - Tower, </p>
							    <p>E 3rd, 4th, and 5th Floors</p>
								<p>London, UK</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 cont-top margin-up ps-lg-5">
                            <div class="cont-left text-center">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Call for help :</h6>
                                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
                                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="far fa-envelope"></span>
                            </div>
                            <div class="cont-right">
                                <h6>
                                    Mail us:</h6>
                              <p><a href="mailto:support@mail.com" class="mail">tasteofdecor@gmail.com</a></p>
                                <p><a href="mailto:contact@mail.com" class="mail">interior@gmail.com</a></p>
								</div>
                        </div>
                    </div>
                </div>
                                <div class="contact-right mt-lg-4">
                    <form method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="Name" id="w3lName" placeholder="Your Name*" class="contact-input" required=""><br/>
                            <input type="email" name="Email" id="w3lSender" placeholder="Your Email*" class="contact-input" required=""><br/>
                            <input type="text" name="Phone_no" id="w3lPhone" placeholder="Enter your Phone Number *" required="">
                        </div>
                        <div class="form-input">
                            <textarea name="Message" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <div class="submit-w3l-button text-lg-right">
                            <button class="btn btn-style btn-primary" name="send">Send Message</button>
                        </div>
						
						
				
                    </form>
                </div>
            </div>
            
        </div>
    </section>
    <!-- /contact-form-2 -->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!-- //contacts -->
    <!--/w3l-footer-29-main-->
<?php include 'footer.php';?>    
	<!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 08:29:00 GMT -->
</html>
