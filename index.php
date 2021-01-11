<!DOCTYPE HTML>

<html>
	<head>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6688022651918936",
    enable_page_level_ads: true
  });
</script>
		<title>Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->


	</head>
	<body>

  <?php
if (isset($_POST["name"]))
 {
    $name = $_POST["name"]; 	
 }
if (isset($_POST["email"]))
 {
    $email = $_POST["email"]; 	
 }
if (isset($_POST["message"]))
 {
    $message = $_POST["message"]; 	
 }


$myfile = fopen("newfile.html", "a");

if (isset($_POST["name"]))
 {
    fwrite($myfile, " ".$name." "); 	
 }

if (isset($_POST["email"]))
 {
    fwrite($myfile, " ".$email." ");	
 }

 if (isset($_POST["message"]))
 {
    fwrite($myfile, " ".$message." "); 	
 }


fclose($myfile);
?> 

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html">House Of Tales</a></h1>
							<span class="tag"></span>
						</div>
						<!-- <nav id="nav">
							<ul>
								<li class="active"><a href="index.html">Homepage</a></li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav> -->
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
						<section>
							<p style="font-size: 50px; margin-top: 10px;">House Of Tales</p>
						</section>
					</div>

				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u"> <a href="PITCH-STYLEFRAMES-ON-TECHNOLOGY.html" target="_blank" class="image featured"><img src="images/pic01.jpg" alt="" style="width: 368px; height: 160px;"></a>
									<div class="box">
										<p><strong>Pitch  StyleFrames On Technology</strong></p>
										<a href="PITCH-STYLEFRAMES-ON-TECHNOLOGY.html" class="button" target="_blank">Read More</a> 
									</div>
								</section>
								<section class="4u"> <a href="Shadow-Of-Elephant-Village.html" target="_blank" class="image featured"><img src="images/pic02.gif" alt="" style="height: 160px;"></a>
									<div class="box">
										<p><strong>Shadow of Elephant Village</strong></p>
										<a href="Shadow-Of-Elephant-Village.html" target="_blank" class="button">Read More</a> 
									</div>
								</section>
								<section class="4u"> <a href="Corruption-is-leech-to-India.html"  target="_blank" class="image featured"><img src="https://media.giphy.com/media/CoFNOmqlSRf4Q/giphy.gif" alt="" style="height: 160px;"></a>
									<div class="box">
										<p><STRONG>Corruption is leech to India</STRONG></p>
										<a href="Corruption-is-leech-to-India.html"  target="_blank" class="button">Read More</a> </div>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="Kausani-Mini-Switzerland.html" target="_blank" class="image featured"><img src="images/pic01.jpg" alt="" style="height: 160px;"></a>
									<div class="box">
										<p><strong>Kausani Mini Switzerland</strong></p>
										<a href="Kausani-Mini-Switzerland.html" target="_blank" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="BODY-SHAMING-IS-THE-NEW-FAME.html" target="_blank" class="image featured"><img src="images/pic04.jpg" alt="" style="height: 160px;"></a>
									<div class="box">
										<p><strong>BODY SHAMING IS THE NEW FAME</strong></p>
										<a href="BODY-SHAMING-IS-THE-NEW-FAME.html" target="_blank" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="Youth-in-society.html" target="_blank" class="image featured"><img src="images/pic03.jpg" alt="" style="height: 160px;"></a>
									<div class="box">
										<p><strong>Youth in society</strong></p>
										<a href="Youth-in-society.html" target="_blank" class="button">Read More</a> </div>
								</section>
							</div>
							<!-- <div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
									<div class="box">
										<p>Ethe Tohda ja Description topic de baare</p>
										<a href="#" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
									<div class="box">
										<p>Ethe Tohda ja Description topic de baare</p>
										<a href="#" class="button">Read More</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
									<div class="box">
										<p>Ethe Tohda ja Description topic de baare</p>
										<a href="#" class="button">Read More</a> </div>
								</section>
							</div> -->
						</div>
					</div>

				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row"> 
								
								<!-- Content -->
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-wrench">
												<h3>Upcomming Topic</h3>
												<span>Kausani mini Switzerland</span> 
											</li>

                                            <!-- <li class="fa fa-cogs">
												<h3>Random Heading</h3>
												<span>Random Bakwaas about that Random Heading jo mujhe abhi nahi pta yaha pe kya likhna to jo mann me aaa rha ha likh rha hu just to fill up the space.</span> 
											</li> -->
											
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-leaf">
												<h3>Thought of the Day</h3>
												<span>A Room Without Books Is Like A Body Without A Soul.</span> 
											</li>
											<!-- 
											<li class="fa fa-road">
												<h3>Random Heading</h3>
												<span>Random Bakwaas about that Random Heading jo mujhe abhi nahi pta yaha pe kya likhna to jo mann me aaa rha ha likh rha hu just to fill up the space</span> </li> -->
										</ul>
									</section>
								</div>
							</div>
						</div>
					</div>

	</div>

	<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<section>
					<header class="major">
						<h2>Leave &nbsp;  a &nbsp;  Message</h2>
						<span class="byline">It won't take much time !!!</span>
					</header>
					<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  enctype="multipart/form-data" >
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="name" id="name" placeholder="Name" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="email" id="email" placeholder="Email" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<ul class="actions">
									<li>
										<input type="submit" value="Send Message" class="button alt" id="myBtn" />
									</li>
								</ul>
							</div>
						</div>
					</form>
				</section>
				<!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfY-bLkBPKWg0rkCAhKxnvkz7-QAGDgtgKjP0J9Gkfj_6YMKA/viewform?embedded=true" width="500" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe> -->
			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p style="clear: both;">
					<p style="float: left;">Design: <a>Ram</a> </p>
					<p style="float: right;">Author <a>Aishwarya</a></p>
					</p>
					<br>
					<div style="clear: both;">
						<ul class="icons" style="float: left;">
						<li><a href="https://www.facebook.com/iamramkakkar" target="blank" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="https://www.instagram.com/iamramkakkar/?hl=en" target="blank" class="fa fa-instagram"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus" target="blank"><span>Google+</span></a></li>
					    </ul>
					    <ul class="icons" style="float: right;">
						<li><a href="https://www.facebook.com/aishwarya.goyal.35?ref=br_rs" target="blank" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="https://www.instagram.com/aishwaryagoyall_/?hl=en" target="blank" class="fa fa-instagram"><span>Instagram</span></a></li>
						<li><a href="#" target="blank" class="fa fa-google-plus"><span>Google+</span></a></li>
					    </ul>
				    </div>
				</div>
			</div>
		</div>

		<script >
			
				var btn = document.getElementById("myBtn");
				btn.onclick = function() 
				{	
					var a = document.getElementById("name").value;
				    window.alert("Thank You "+a);
                }
			
		</script>


<script language="javascript" type="text/javascript">
    $(window).load(function() 
    {
        $('#loading').hide();
    });
</script>

	</body>
</html>