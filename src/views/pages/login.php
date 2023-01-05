<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
            <form>
                <input type="text" name="login">
                <input type="password" name="password">
                <input type="submit" name="action" value="login">
            </form>
            <p><a href="<?php echo INCLUDE_PATH ?>register">Create Account</a></p>
        </div>
    </div>
</body>

</html>