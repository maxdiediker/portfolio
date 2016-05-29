<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>f3</title>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="css/styles.css" >
<link rel="stylesheet" type="text/css" href="css/media.css" >

<!--this is fancy box stuff-->
<!-- Add jQuery library -->
<script type='text/javascript' src='js/jquery.fancybox'></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>



<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

<script type="text/javascript">
	$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        type: 'iframe',
        autoSize : false,
        beforeLoad : function() {
            this.width  = parseInt(this.element.data('fancybox-width'));
            this.height = parseInt(this.element.data('fancybox-height'));
        }
    });


</script>
<!--this is fancy box stuff-->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!---    FLEXSLIDER-->
		 <!-- Demo CSS -->



	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


		<!---    FLEXSLIDER -->
				<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" media="screen" href="./css/mobilemenu.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>




		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
		</script>


  </head>

<body>




        <div id="wrapper">
       <h2>This page is the misc. professional gallery</h2>
   <header>
   	<div id = "header-inner" >
   	  <div id="header-left">
   	  	 <div id="logo">
            <img src="images/logo.png" alt="this is logo image">

   	  	 </div><!--end logo-->
   	  	  <div id = "logotextbox">
    <h3><b>Max Diediker</b><br> <a href="resume.php">resume<br></a> </h3>
   <div id="social1">

<ul>

<li><a class="fancybox" href="contact.php" data-fancybox-width="400" data-fancybox-height="500" title="nothing is off limits"><img id="contact4" src="images/contact.png" alt="sdf" /></a></li>


</ul>

</div>  <!--end social-->

  </div><!--end logotextbox-->

   	  </div><!--header inner-->
   	   <div id="header-right">


    <?php include('includes/nav.php'); ?>

   </div>
   </div>

   </header>






	<div id="prosection">
		<div id="container" class="cf">


	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li data-thumb="images/scr_1.jpg" >
  	    	    <img src="images/scr_1.jpg" alt="news" />
  	    		</li>
  	    		<li data-thumb="images/scr_2.jpg" >
  	    	    <img src="images/scr_2.jpg" alt="news" />
  	    		</li>
  	    		<li data-thumb="images/scr_3.jpg" >
  	    	    <img src="images/scr_3.jpg" alt="news" />
  	    		</li>
  	    		<li data-thumb="images/scr_4.jpg">
  	    	    <img src="images/scr_4.jpg"  alt="news"/>
  	    		</li>
  	    		 </ul>

        </div><!--end divclass flex-->
        </section>
	</div><!--end divmain-->
	</div><!--end divcontainer-->

	<div id= "home_container">
    <h2>This pageis the misc. professional gallery</h2>
    <p>. Click the menu or the sliding image to view Professional pulished and unpublished work as well personal artwor<br>Comments and questions are appreciated.  Please leae a message </p>
		</div>
	</div>
<aside>

</aside>




<?php include('includes/footer.php'); ?>








</div>	<!--end wrapper-->



</html>
