<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>styles/feed.css" rel="stylesheet">
</head>

<body>
    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logo-hprog.png" />
            </div>
            <br />
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br />
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> feed</a>
                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> perfil</a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> friends</a>
            </div>
        </div>
        <div class="feed">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">

                    </div>
                    <h3>Hermano</h3>
                    <span>17:00 09/01/2023</span>
                </div>
                <div class="feed-single-post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>