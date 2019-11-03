<header class="kotha-menu marketing-menu">
	<nav class="navbar  navbar-default">
		<div class="container">
			<div class="menu-content">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					        data-target="#myNavbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="top-social-icons list-inline pull-right">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="top-search">
							<a href="#" class="sactive">
								<i class="fa fa-search"></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav text-uppercase pull-right">
						
						<!-- если пользователь авторизован, показываем ему его имя и кнопку выхода -->
						<?php if ($_SESSION['auth_logged_in'] === true) : ?>
							<li><a href="/logout">Logout</a></li>
							<li ><a style="color: #da521e; " onmouseover="this.style.color='#da521e';"><h4><?= $_SESSION['auth_username'] ?></h4></a></li>							
						<?php else : ?>
							<li><a href="/register">Sing up</a></li>
							<li><a href="/login">Sign in</a></li>
						<?php endif; ?>
					</ul>

					<ul class="nav navbar-nav text-uppercase pull-left">
						<li><a href="home">Home</a></li>
						<li><a href="#">About me</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="show-search">
					<form role="search" method="get" id="searchform" action="#">
						<input type="text" placeholder="Search and hit enter..." name="s" id="s">
					</form>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	<div class="kotha-logo text-center">
		<h1><a href="/home"><img src="assets/front/images/kotha-logo.png" alt="kothPro"></a></h1>
	</div>
</header>