<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Matrimonial | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--for RWD--><meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<!-- Custom Theme files--> 
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<div class="container1">
<!-- ============================  Navigation Start =========================== 
 php include_once("includes/navigation.php");-->
 <!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
		<div class="logo"> <strong><i>Matrimonial</i></strong> </div>

        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
				  <?php 
				  if(isloggedin()){
				  	$id=$_SESSION['id'];
				  	echo "<li><a href=\"userhome.php?id=$id\">User Home</a></li>";
				  	echo "<li><a href=\"logout.php\">Logout</a></li>";
				  }
				  else{
				  	echo "<li><a href=\"login.php\">Login</a></li>";
				  	echo "<li><a href=\"register.php\">Register</a></li>";
				  }

				  ?>
					
				  </ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="index.php"></a>
           <div class="pull-right">												
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>
		    		
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		              </ul>
					</li>
					
					<li><a href="sstories.php">Success stories</a></li>
		            <li class="last"><a href="contact.php">Contact US</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<!-- ============================  Navigation End ============================ -->
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
    </div>
  </div>
 </div> 
 <section class="content"><!--content holder-->
        
    <article class="para"><!--content-->
		<main>
        <h1>Lorem ipsum dolor</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Totam ut expedita veritatis velit natus impedit harum tempora voluptatum.
            Dicta explicabo quos similique! Ea iusto commodi ullam ex incidunt 
			similique ut.
		</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Totam ut expedita veritatis velit natus impedit harum tempora voluptatum.
             Dicta explicabo quos similique! Ea iusto commodi ullam ex incidunt 
             similique ut.Lorem ipsum, dolor sit amet consectetur adipisicing elit.
			 Totam ut expedita veritatis velit natus impedit harum tempora voluptatum.
             Dicta explicabo quos similique! Ea iusto commodi ullam ex incidunt 
             similique ut.Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Totam ut expedita veritatis velit natus impedit harum tempora voluptatum.
             Dicta explicabo quos similique! Ea iusto commodi ullam ex incidunt 
             similique ut.
        </p>
        </main> 
        </article><!--Content-->
        
                <aside class="sidebar1"><!--Sidebar-->
        
                    <div class="ss">
                       <h3>Success Stories</h3>
                    
                        <ul>
                            <li><a href="#">2018</a></li>
                            <li><a href="#">2019</a></li>
                            <li><a href="#">2020</a></li>
                        </ul>
                    </div>
                </aside><!--Sidebar-->
        
                <div class="clearfix"></div>
        
            </section><!--content holder-->
	
    <div class="footer">
    	<div class="container">
			<div class="footer-box">
                <h3>About Us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Totam ut expedita veritatis velit natus impedit harum tempora voluptatum.
                            Dicta explicabo quos similique! Ea iusto commodi ullam ex incidunt 
                        similique ut.
                </p>
            </div>
            <div class="ad">
                <address>
                        <h3>Company Name</h3>
                        <p>#100, Someplace, Somewhere far,54654</p>
                        <p>Email: <a href="mailto:contact@someone.com">help@matrimonial.com</a></p>
                        <p>Ph: <a href="tel:123456789">123456789</a></p>
						<li><a href="faq.php">FAQs</a></li>
                </address>
			</div>
		</div>

    		<div class="clearfix"> </div>
            <div class="copy">
                <p><small>Copyright &copy; 2020. All Rights Reserved</small></p>
            </div>
    </div>
</div>
</body>
</html>	