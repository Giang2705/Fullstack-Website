<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaKilogram</title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="square"></div>
    <div id="c2" class="rounded-circle"></div>
    <div id="c1" class="rounded-circle"></div>
    <div class="right">
        <h1 id="login">Login</h1>
        <h1 id="welcome">Welcome back</h1>
        <p>Sign in to your account</p>
        <form method="post" action="login.php">
            <div class="txt_field">
                <input name="username" type="text" required placeholder="Username">
            </div>
            <div class="txt_field">
                <input name="password" type="password" required placeholder="Password">
            </div>
            <input id="loginbtn" type="submit" value="Login">
            <label for="loginbtn2">Sign in</label>
            <input id="loginbtn2" class="rounded-circle" type="submit" value="&#8594">
            <hr id="hr1">
            <h3 id="or">OR</h3>
            <hr id="hr2">
            <a class="my-1" href="#"><img src="./img/pngfind.com-dairy-queen-logo-png-6169174.png" alt="Sign up with Facebook"></a>
            <div id="fb"><a class="my-5 text-decoration-none fw-bolder" style="color: #193d97;" href="#">Log in with Facebook</a></div>
            <a id="signupformobile" class="text-decoration-none" href="register.php">Sign up</a>
            <a id="forgotp" class="text-decoration-none" href="forgotP.html">Forgot Password?</a>
        </form>
    </div>
    <div class="signup_link">
        <p>Don't have an account? <a href="register.php"><b>Sign up</b></a></p>
    </div>
</body>
</html>