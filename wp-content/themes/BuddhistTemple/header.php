<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>
			<?php wp_title('|', true, 'right' ); ?>
			<?php bloginfo('name' ); ?>

		</title>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class( ); ?>>
	<!---Header section -->
	<header class="lotus-flower">

		<!-- Navbar-->
		<div class="navbar navbar-default">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <!--logo Title-->
						<div class="container">
						<a class="navbar-brand" href="<?php home_url( ); ?>">
							<img src="img/logo1.png" class="hidden-xs">
						</a>
						<a href="<?php home_url( ); ?>">
							<h1 class="navbar-text"><?php bloginfo('name'); ?><br>
							<h3><?php bloginfo('description' ); ?></h3><hr></h1>
						</a>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="myNavbar">
						
					<?php 
						$args = array(
							'menu' => 'header-menu',
							'menu_class' => 'nav navbar-nav',
							'container' => 'false'
							 );
						wp_nav_menu( $args );

					?>

			<!--		<ul class="nav navbar-nav">
							<li class="active"><a href="#">
								<span class="sr-only">(Current)</span>Home</a></li>
							<li><a href="newsEvent.html">News|Event</a></li>
							<li><a href="#">About Us</a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Article<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="blog-index.html">Zen Story</a></li>
            			<li><a href="#">Another action</a></li>
            			<li><a href="#">Something else here</a></li>
            			<li role="separator" class="divider"></li>
            			<li><a href="#">Separated link</a></li>
            			<li role="separator" class="divider"></li>
            			<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul> -->
		
					<form class="navbar-form navbar-left" role="search">
        			<div class="input-group">
          			<input type="text" class="form-control" placeholder="Search for...">
          			<span class="input-group-btn">
          				<button type="submit" class="btn btn-default">Go</button>
          			</span>
        			</div>
      				</form>
      			<!-- Button trigger donate modal -->
      			<button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal">Donate to our Temple</button>
				</div>
			</div>
		</div>