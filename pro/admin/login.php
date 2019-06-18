<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Admin Login</title>
</head>
<body class="text-center">
    <form class="login_form">
        <h2 class="text-danger"></h2>
        <h2 class="text-primary"></h2>
        <h3 class="m-3">Admin Login </h3>
        <div></div>
        <input type="text" id="user_email" name="user_email"
                class="form-control" placeholder="Email address" required autofocus>
        <input type="password" id="user_pass" name="user_pass"
                class="form-control" placeholder="Password" required><br>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">
    </form>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>



