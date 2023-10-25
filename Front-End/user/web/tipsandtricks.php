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
	include 'header.php';?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Taste of Decor</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
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
<script async src='/js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="/assests/css/font-awesome.min.css">
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
                           Tips and Tricks</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Tips and Tricks</li>
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
    <!--/w3l-blog-->
    <section class="w3l-blog bloghny-page">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-8 bloghnypage-left blog-single-post">
                        
						 <div class="reply mt-5" id="reply">
                            <h3 class="post-content-title py-3">Ask tips and tricks here</h3>
                            <form action="#" method="POST">
                                <div class="form-group reply">
                                    <div class="input-grids row mb-md-4 mb-3">

                                        <div class="form-group col-lg-6">
                                            <input type="text" name="Name" class="form-control" placeholder="Your Name*" required="">
                                        </div>
                                        <div class="form-group col-lg-6 mt-lg-0 mt-3">
                                            <input type="email" name="Email" class="form-control" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <textarea class="form-control" name="ques" placeholder="Your Question" id="exampleFormControlTextarea1" rows="4"></textarea>
									
									
									
									<div class="post-submit mt-4">
                                        <button class="btn btn-primary btn-style" name="sub" type="submit">Post here<i class="fas fa-arrow-right ms-lg-4 ms-2"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
						<?php
							if(isset($_POST['sub']))
							{
								
								$name=$_POST['Name'];
								$que=$_POST['ques'];
								
								
								
								$q1 = "INSERT INTO tips_and_tricks_table(QUESTION,NAME) VALUES('$que','$name')";
								$result1 = mysqli_query($con,$q1);
								if($result1)
								{
									echo "<script> alert('Your Question Added');</script>";
									
									
								}
								else
								{
									echo "<script> alert('Can't Add Question');</script>";
								}
							}
								
							
							?>
                        <div class="comments">
						
                            <h3 class="post-content-title">Tips and Tricks</h3>
                            <div class="media mt-md-4 mt-3">
                                
                               
                            </div>
							<?php
								$q2= 'SELECT * FROM tips_and_tricks_table';  
								$res = mysqli_query($con,$q2);
								while($value1 = mysqli_fetch_array($res))
								{
									
								?>
                            <div class="media">
                                
                                <div class="media-body comments-grid-right">
                                    <a href="#URL" class="name mt-0"><?php echo $value1['NAME']; ?></a>
                                    <ul class="time-rply mb-3">
                                        
                                        
                                    </ul>
                                    <p>QUESTION: <?php echo $value1['QUESTION']; ?></p>

								<?php $q= 'SELECT * FROM expert_table';  
								$rest = mysqli_query($con,$q);
								while($value2 = mysqli_fetch_array($rest))
								{
								?>
                                    <div class="media mt-4">
                                     <?php } ?> 
                                        <div class="media-body comments-grid-right">
								<a href="#URL" class="name mt-0"><b> annonymous </b></a> 
                                            <ul class="time-rply mb-3">
                                               
                                                
												
                                            </ul>
                                            <p>TIP: <?php echo $value1['TIP_DESCRIPTION']; ?> <br/> <br/>
											
												TRICK: <?php echo $value1['TRICK_DESCRIPTION']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>


                    </div>
					
					<?php
							}
					?>
                    <!--/sidebar-->
                    <div class="col-lg-4 blog-w3hny-right ps-lg-5 mt-lg-0 mt-5">
                        <aside class="sidebar">
                            <!--Blog Category Widget-->
                           
                            <!-- Popular Post Widget-->
                           
                        </aside>
                    </div>
                    <!--//sidebar-->
                </div>

            </div>
        </div>
    </section>
    <!--//Blog-Section-->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>

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



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

</html>
<?php
	}
	?>
