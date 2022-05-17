<?php
$fName = '';
$lName = '';
$email = '';
$password = '';
$userType = '';
// $imgProfile = '';

$csv='accounts_db.csv';
$fh=fopen($csv,'r');
$error='';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if (isset($_POST["submit"])){
    $fName = clean_text($_POST["fName"]); 
    $lName = clean_text($_POST["lName"]);
    $email = clean_text($_POST["email"]);
    $password = clean_text($_POST["password"]);    
    $userType = clean_text($_POST["user_type"]);
    // $img_temp = clean_text($_FILES['imgProfile']['tmp_name']);
    // $imgProfile = clean_text($_FILES['imgProfile']['name']);

    // $path = "image/".$imgProfile;

    $file_open = fopen("accounts_db.csv","a");
    $no_rows = count(file("accounts_db.csv"));
    if($no_rows > 1){
        $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
        'no' => $no_rows,
        'firstName' => $fName, 
        'lastName' => $lName,
        'email' => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
        'userType' => $userType,
        // 'imgProfile' => move_uploaded_file($img_temp, $path),
    );
    fputcsv($file_open, $form_data);
    $fName = '';
    $lName = '';
    $email = '';
    $password = '';
    $userType = '';
}

header('Location: index.html')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup &#10095 Instakilogram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="Navbar">
      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div class="logo"><a href="#">InstarKilogram</a></div>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Notification</a></li>
            <li>
              <a href="#" class="desktop-link">Account</a>
              <input type="checkbox" id="show-features">
              <label for="show-features">Features</label>
              <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Log-out</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="#" class="search-box">
          <input type="text" placeholder="Type Something to Search..." required>
          <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
      </nav>
    </div>
    

  </header>
    <div id="c1" class="rounded-circle"></div>
    <div id="c2" class="rounded-circle"></div>
    <div class="signup">
        <h1 id="desktoph1">Create account</h1>
        <h1 id="mobileh1">Create your account</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="text" id="firstname" name="fName" value="<?php echo $fName; ?>" required placeholder="Enter first your name">
            </div>
            <div class="txt_field">
                <input type="text" id="lastname" name="lName" value="<?php echo $lName; ?>" required placeholder="Enter last your name">
            </div>
            <div class="txt_field">
                <input type="email" name="email" value="<?php echo $email; ?>" required placeholder="Enter your email">
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password" value="<?php echo $password;?> pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
            </div>
            <div class="txt_field">
                <input type="password" id="confirmpassword" name="cPass" required placeholder="Confirm your password">
            </div>
            <div>
                <select class="form-control" name="user_type" id="" <?php echo $userType;?>>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <label for="browse">Upload your profile picture: </label><input id="browse" type="file" name="imgProfile">
            <div class="termservice">
                <input id="t&s" type="checkbox">
                <label for="t&s">I agree with all the statements in <a class="fw-bold text-decoration-underline" style="color: black;" href="#">Terms of service</a></label>
            </div>
            <input id="registerbtn" class="form-btn fw-bold" type="submit" value="SIGN UP" name="submit">
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

    <footer>
        <div class="footer-container">
            <div class="footer-outer">
                <div class="footer-inner">
                    <a href="#">About</a>
                    <a href="#">Help</a>
                    <a href="#">Terms</a>
                    <a href="#">Copyrights</a>
                    <a href="#">Privacy</a>
                </div>
            <div class="sub">
                <p>2022 Instakilogram</p> 
            </div>
            </div>
        </div>
    </footer>

    <script src="register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>