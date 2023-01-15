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
			<div class="community">
				<div class="container-community">
					<h4>Friends</h4>
					<div class="container-community-wraper">
						<div class="container-community-single">
							<div class="img-community-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(1).png" />
							</div>
							<div class="info-community-user-single">
								<h2>Cliff Doyle</h2>
								<p>cliffdoyle@gmail.com</p>
							</div>
						</div>
						<div class="container-community-single">
							<div class="img-community-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(2).png" />
							</div>
							<div class="info-community-user-single">
								<h2>Herbert Goodwin</h2>
								<p>herbertgoodwine@gmail.com</p>
							</div>
						</div>
						<div class="container-community-single">
							<div class="img-community-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(3).png" />
							</div>
							<div class="info-community-user-single">
								<h2>Kemp Wilcher</h2>
								<p>kempwilchere@gmail.com</p>
							</div>
						</div>
						<div class="container-community-single">
							<div class="img-community-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(4).png" />
							</div>
							<div class="info-community-user-single">
								<h2>Alex Gardner</h2>
								<p>alexgardnere@gmail.com</p>
							</div>
						</div>
						<div class="container-community-single">
							<div class="img-community-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(5).png" />
							</div>
							<div class="info-community-user-single">
								<h2>Magnus Colon</h2>
								<p>magnuscolon@gmail.com</p>
							</div>
						</div>
						<div class="container-community-single">
							<div class="img-community-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(6).png" />
							</div>
							<div class="info-community-user-single">
								<h2>Ike Williamson</h2>
								<p>ikewilliamson@gmail.com</p>
							</div>

						</div>
					</div>
				</div>
				<br />
				<div class="container-community">
					<h4>Community</h4>
					<div class="container-community-wraper">
						<?php
						$community = \src\models\CommunityModel::listCommunity();
						foreach ($community as $key => $value) {
							$pdo = \src\MySql::connect();
							$verifyFriendship = $pdo->prepare(
								"SELECT * FROM friendships WHERE 
								(requesting = ? AND requested = ? AND status = 1) 
								OR (requesting = ? AND requested = ? AND status = 1)"
							);
							$verifyFriendship->execute(array($value['id'], $_SESSION['id'], $_SESSION['id'], $value['id']));

							if ($verifyFriendship->rowCount() == 1)
								continue;

							if ($value['id'] == $_SESSION['id'])
								continue;
						?>
							<div class="container-community-single">
								<div class="img-community-user-single">
									<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatars/avataaars(7).png" />
								</div>
								<div class="info-community-user-single">
									<h2><?php echo $value['name']; ?></h2>
									<p><?php echo $value['email']; ?></p>
									<div class="btn-request-friendship">
										<?php
										if (\src\models\CommunityModel::requestExists($value['id'])) {
										?>
											<a href="<?php echo INCLUDE_PATH ?>community?requestFriendship=<?php echo $value['id']; ?>">
												Request Friendship
											</a>
										<?php } else { ?>
											<a href="javascript::void(0)" style="color:orange; border:0; pointer-events:none; cursor: default;">
												pending request
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>