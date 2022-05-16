<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup &#10095 Instakilogram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div id="c1" class="rounded-circle"></div>
    <div id="c2" class="rounded-circle"></div>
    <div class="signup">
        <h1 id="desktoph1">Create account</h1>
        <h1 id="mobileh1">Create your account</h1>
        <form>
            <div class="txt_field">
                <input type="text" id="firstname" required placeholder="Enter first your name">
            </div>
            <div class="txt_field">
                <input type="text" id="lastname" required placeholder="Enter last your name">
            </div>
            <div class="txt_field">
                <input type="email" required placeholder="Enter your email">
            </div>
            <div class="txt_field">
                <input type="password" required name="" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
            </div>
            <div class="txt_field">
                <input type="password" id="confirmpassword" required placeholder="Confirm your password">
            </div>
            <label for="browse">Upload your profile picture: </label><input id="browse" type="file">
            <div class="termservice">
                <input id="t&s" type="checkbox">
                <label for="t&s">I agree with all the statements in <a class="fw-bold text-decoration-underline" style="color: black;" href="#">Terms of service</a></label>
            </div>
            <input id="registerbtn" class="fw-bold" type="submit" value="SIGN UP">
            <input id="resetbtn" type="reset" value="CLEAR">
            <p id="returnlogin">Already have an account? <a class="fw-bold" style="color: black;" href="index.html">Login here</a></p>
            <a id="back" href="index.html">Back</a>
        </form>
    </div>
    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Between <b>8 and 20 characters</b></p>
    </div>
    <div id="message2">
        <p>Passwords do not match</p>
    </div>
    <div id="message3">
        <p>Must between 2 and 20 characters</p>
    </div>
    <div id="message4">
        <p>Must between 2 and 20 characters</p>
    </div>
    <script src="register.js"></script>
</body>
</html>