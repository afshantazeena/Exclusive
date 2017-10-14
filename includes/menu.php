<?php 
		
	
?>
<div class="container container1">
			<nav class="navbar navbar-expand-lg " style="background-color: #4267B2;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="home.php">exclusive wallcovering</a>
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0" style="padding-right:20px;">
						<li id="home" class="nav-item <?php if ((isset($_SESSION['page']))&&($_SESSION['page']=='home')){echo "active";} ?>">
							<a class="nav-link" href="home.php">HOME </a>
						</li>
						<li id="about" class="nav-item <?php if ((isset($_SESSION['page']))&&($_SESSION['page']=='about')){echo "active";} ?>">
							<a class="nav-link " href="about.php">ABOUT</a>
						</li>
						<li id="services" class="nav-item <?php if ((isset($_SESSION['page']))&&($_SESSION['page']=='services')){echo "active";} ?>">
							<a class="nav-link " href="services.php">SERVICES</a>
						</li>
						<li id="photography" class="nav-item <?php if ((isset($_SESSION['page']))&&($_SESSION['page']=='photography')){echo "active";} ?>">
							<a class="nav-link" href="photography.php">PHOTOGRAPHY</a>
						</li>
						<li id="latest-news" class="nav-item <?php if ((isset($_SESSION['page']))&&($_SESSION['page']=='latestNews')){echo "active";} ?>">
							<a class="nav-link " href="latest-news.php">LATEST NEWS</a>
						</li>
						<li id="contact-us.php" class="nav-item <?php if ((isset($_SESSION['page']))&&($_SESSION['page']=='contactUs')){echo "active";} ?>">
							<a class="nav-link " href="contact us.php">CONTACT US</a>
						</li>
					</ul>
					
				</div>
			</nav>
</div>
<br/>