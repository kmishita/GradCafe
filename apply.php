<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GradCafe</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
<body class="homepage">
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">GradCafe</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="portfolio.php">Job Profiles</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="recommendations.html">Recommendations</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <div class="text-center" style="margin-top: 8%;">
        <form action="insert.php" method="post">
	      <p>
    	     <label for="EmailID">EmailID:</label>
           <input type="text" name="emailID" id="emailID">
        </p>
        <p>
    	     <label for="Name">Name:</label>
           <input type="text" name="Name" id="Name">
        </p>
        <p>
    	     <label for="Age">Age:</label>
           <input type="text" name="Age" id="Age">
        </p>
		    <p>
				   <label for="Gender">Gender:</label>
				   <input type="text" name="Gender" id="Gender">
		   </p>
		<p>
				<label for="Conatct">Contact:</label>
				<input type="text" name="Contact" id="Contact">
		</p>
		<p>
				<label for="Skill">Skill:</label>
				<input type="text" name="Skill" id="Skill">
		</p>
		<p>
				<label for="CompanyDetails">Company Details:</label>
				<input type="text" name="CompanyDetails" id="CompanyDetails">
		</p>
    <input type="submit" value="Add Records">
</form>
</div>
<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="about-us.html">Meet the team</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about-us.html">Contact us</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Profile</h3>
                    <ul>
                        <li><a href="portfolio.html">Digital Marketing</a></li>
                        <li><a href="portfolio.html">Mass Media</a></li>
                        <li><a href="portfolio.html">IT</a></li>


                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Our Clients</h3>
                    <ul>
                        <li><a href="www.google.com">Google</a></li>
                        <li><a href="www.microsoft.com">Microsoft</a></li>
                        <li><a href="www.apple.com">Apple</a></li>
                        <li><a href="www.ibm.com">IBM</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section>

<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->

	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">&copy; 2017 </a>. All Rights Reserved.
                </div>
                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
