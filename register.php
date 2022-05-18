<?php
session_start();

$no ='';
$fName = '';
$lName = '';
$email = '';
$phone = '';
$address = '';
$hobby = '';
$password = '';
$userType = '';

$csv='./data/accounts_db.csv';
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
    $no = clean_text($_POST["no"]); 
    $fName = clean_text($_POST["fName"]); 
    $lName = clean_text($_POST["lName"]);
    $email = clean_text($_POST["email"]);
    $phone = clean_text($_POST["phone"]);
    $address = clean_text($_POST["address"]);
    $hobby = clean_text($_POST["hobby"]);
    $password = clean_text($_POST["password"]);    
    $userType = clean_text($_POST["user_type"]);

    $file_open = fopen("./data/accounts_db.csv","a");
    $no = count(file("./data/accounts_db.csv"));
    if($no > 1){
        $no = ($no - 1) + 1;
    }
    $form_data = array(
        'no' => $no,
        'firstName' => $fName, 
        'lastName' => $lName,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'hobby' => $hobby,
        'password' => password_hash($password,PASSWORD_DEFAULT),
        'userType' => $userType,
        // 'imgProfile' => move_uploaded_file($img_temp, $path),
    );
    fputcsv($file_open, $form_data);
    $no = '';
    $fName = '';
    $lName = '';
    $email = '';
    $phone = '';
    $address = '';
    $hobby = '';
    $password = '';
    $userType = '';

    header('Location: confirmRegister.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup &#10095 Instakilogram</title>
        <!-- font word for logo -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <!-- end of the logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon pen-->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<header>
    <div class="Navbar">
      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div class="logo"><a href="index.php">InstarKilogram</a></div>
        <ul class="links">
            <li><a href="login.php">Log in</a></li>
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
        
        <!-- <form action="" method="post" enctype="multipart/form-data">
                    <label for="imgProfile">
                    Upload your profile image:</label>
                    <input type="file" name="imgProfile" id="imgProfile">
                    <img src="./data/profileImage/<?php echo $newname ?>" style="height: 150px; width: 150px" alt="">
                    <input type="submit" value="Upload Image" name="submit_image">
        </form> -->


        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="txt_field">
                <input type="hide" id="" name="" value="<?php echo $no; ?>" required readonly>
            </div>
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
                <input type="phone" name="phone" value="<?php echo $email; ?>" required placeholder="Enter your phone">
            </div>
            <div class="txt_field">
                <input type="address" name="address" value="<?php echo $email; ?>" required placeholder="Enter your address">
            </div>
            <div class="txt_field">
                <input type="hobby" name="hobby" value="<?php echo $email; ?>" required placeholder="Enter your hobby">
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password" value="<?php echo $password;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
            </div>
            <div class="txt_field">
                <input type="password" id="confirmpassword" name="cPass" required placeholder="Confirm your password">
            </div>
            <div>
                <select class="form-control" name="user_type" id="" <?php echo $userType;?> hidden>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input id="registerbtn" class="form-btn fw-bold" type="submit" value="SIGN UP" name="submit">
            <input id="resetbtn" type="reset" value="CLEAR">
            <p id="returnlogin">Already have an account? <a class="fw-bold" style="color: black;" href="login.php">Login here</a></p>
            <a id="back" href="#">Back</a>
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

    <hr>
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

    <script src="./js/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>