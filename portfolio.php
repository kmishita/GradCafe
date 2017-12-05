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

  </head>
  <body class="homepage">
	<header id="header">
        <nav class="navbar navbar-fixed-top">
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
                        <li class="active"><a href="portfolio.php">Job Profiles</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="recommendations.html">Recommendations</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Find Your Dream Job</h2>
            </div>


            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Digital Marketing</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Mass Media</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">IT Internships</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/quikr-logo.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Quiker'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/vogue.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Vogue'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/amazon.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Amazon'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/mercedes.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Mercedes'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->


                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/oneplus.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='OnePlus'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->


                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/ndtv.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='NDTV'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/magicbricks.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='MagicBricks'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/wipro.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Wipro'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/indiatv.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='IndiaTV'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/hindustan.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Hindustan Times'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->


                    <div class="portfolio-item wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/Dell.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='DELL'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/morgan.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Morgan Stanley'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<div class="portfolio-item wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/accenture.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Accenture'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

					<div class="portfolio-item wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/guru.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Guru Networks'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<div class="portfolio-item wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/oyo.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "Jaisairam.16";
                                  $dbname = "JobPortal";
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }
                                  $sql = "SELECT * FROM Company WHERE Name='Oyo'";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo "<h3>".$row["Name"]."</h3>";
                                    echo "<p>Profile:".$row["Profile"].
                                          "</br>CTC:".$row["CTC"].
                                          "</br>Location:".$row["Location"].
                                          "</br>Skills:".$row["Skill"]."</p>";
                                    }
                                  }
                                  else {
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>

                                    <a href="apply.php"> <i class="fa fa-eye"></i> Apply </a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
  				</div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
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
                <div class="col-sm-6">&copy; 2017 </a>. All Rights Reserved.</div>
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
    </footer><!--/#footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>
