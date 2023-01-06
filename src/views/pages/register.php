<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>styles/style.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar"></div>

    <div class="form-container-login">
        <div class="logo-login">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logo-hprog.png" />
            <p>Connect with your developer friends and expand your learnings with the Dev social network.</p>
        </div>

        <div class="form-login">
            <h3 style="text-align: center;">Create your Account</h3>
            <form method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="action" value="create account">
            </form>
        </div>
    </div>
</body>

</html>