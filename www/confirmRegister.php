<?php
session_start();

if (isset($_POST['submit_image'])){

$csv='./data/accounts_db.csv';
$fh=fopen($csv,'r');
$error=0;
$count = 0;
    
    if (($handle = fopen("./data/accounts_db.csv", "r")) !== FALSE) {
      while (($csvadata = fgetcsv($handle, 0, ",")) !== FALSE) {      
        $count++;
        }
        fclose($handle);
    }

    
    $extention = pathinfo($_FILES["imgProfile"]["name"], PATHINFO_EXTENSION);

    $rename = 'avartar_'.($count-1).'';
    $newname = $rename.'.'.$extention;
    
    
    move_uploaded_file($_FILES["imgProfile"]["tmp_name"], 'data/profileImage/'.$newname);
    
    
        $result = $newname;
        // echo '<img src="./data/profileImage/'.$result.'">';
}


if (isset($_POST['submit'])){
    header('Location: login.php');
    // echo '<img src="./data/profileImage/'.$result.'">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Register</title>

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
    
        <form action="" method="post" enctype="multipart/form-data">
                    <label for="imgProfile">
                    Upload your profile image:</label>
                    <input type="file" name="imgProfile" id="imgProfile">
                    <img src="./data/profileImage/<?php echo $result ?>" style="height: 150px; width: 150px" alt="">
                    <input type="submit" value="Upload Image" name="submit_image">
                    
        </form>

        <form action="" method="post">
            <input id="registerbtn" class="form-btn fw-bold" type="submit" value="CONFIRM" name="submit">
        </form>
        <!-- <form action="" method="post" enctype="multipart/form-data">
            <div class="txt_field">
                <input type="text" id="firstname" name="fName" value="<?php echo $firstName; ?>" required readonly>
            </div>
            <div class="txt_field">
                <input type="text" id="lastname" name="lName" value="<?php echo $lastName; ?>" required readonly>
            </div>
            <div class="txt_field">
                <input type="email" name="email" value="<?php echo $email; ?>" required readonly>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password" value="<?php echo $password; ?>" required readonly>
            </div>
            <div>
                <label for="userType">User Type: </label>
                <input type="text" value="<?php echo $userType; ?>" required readonly>
            </div>
            <input id="registerbtn" class="form-btn fw-bold" type="submit" value="CONFIRM" name="submit">
            <a id="back" href="register.php">Back</a>
        </form> -->
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
</body>
</html>