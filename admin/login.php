<?php 
    include('function.php');
    if(empty($_SESSION['uid'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style/theme.css">
</head>
<body>
    <div class="content-login">
        <form method="post">
            <p class="message"><?php echo userLogin(); ?></p>
            <label>Name or Email</label>
            <input type="text" class="box" name="name_email">
            <label>Password</label>
            <input type="password" class="box" name="password">
            <div class="wrap-btn">
                <a href="register.php" class="btn">Register?</a>&ensp;
                <input type="submit" class="btn" name="btn-login" value="LOGIN">
            </div>
        </form>
    </div>
</body>
</html>
<?php
    }
    else {
        header('location: index.php');
    }
?>