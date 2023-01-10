<!DOCTYPE html>
<html>

<head>
	<title>Welcome, <?php echo $_SESSION['name']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>styles/feed.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>styles/community.css" rel="stylesheet">
</head>

<body>
	<section class="main-feed">
		<?php
		include('includes/sidebar.php');
		?>
		<div class="feed">
			<div class="comunidade">
				<div class="container-comunidade">
					<h4>Amigos</h4>
					<div class="container-comunidade-wraper">
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(1).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Cliff Doyle</h2>
								<p>cliffdoyle@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(2).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Herbert Goodwin</h2>
								<p>herbertgoodwine@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(3).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Kemp Wilcher</h2>
								<p>kempwilchere@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(4).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Alex Gardner</h2>
								<p>alexgardnere@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(5).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Magnus Colon</h2>
								<p>magnuscolon@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(6).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Ike Williamson</h2>
								<p>ikewilliamson@gmail.com</p>
							</div>

						</div>
					</div>
				</div>
				<br />

				<div class="container-comunidade">
					<h4>Comunidade</h4>
					<div class="container-comunidade-wraper">
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(7).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Wilfrid Montgomery</h2>
								<p>wilfridmontgomery@gmail.com</p>
								<div class="btn-solicitar-amizade">
									<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Request Friendship</a>
								</div>
							</div>


						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(8).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Karen Barrett</h2>
								<p>karenbarrett@gmail.com</p>
								<div class="btn-solicitar-amizade">
									<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Request Friendship</a>
								</div>
							</div>


						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(9).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Charlie Moreno</h2>
								<p>charliemoreno@gmail.com</p>
								<div class="btn-solicitar-amizade">
									<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Request Friendship</a>
								</div>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(10).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Hannah Marsho</h2>
								<p>hannahmarsh@gmail.com</p>
								<div class="btn-solicitar-amizade">
									<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Request Friendship</a>
								</div>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(11).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Darcy Nicholls</h2>
								<p>gdarcynicholls@gmail.com</p>
								<div class="btn-solicitar-amizade">
									<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Request Friendship</a>
								</div>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(12).png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Byron Quinn</h2>
								<p>byronquinn@gmail.com</p>
								<div class="btn-solicitar-amizade">
									<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Request Friendship</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>