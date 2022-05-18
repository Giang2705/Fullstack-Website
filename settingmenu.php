<?php
session_start();

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

if (isset($_POST["save"])){
    $_SESSION['firstName'] = clean_text($_POST["newName"]); 
    $_SESSION['email'] = clean_text($_POST["newEmail"]);
    $_SESSION['phone'] = clean_text($_POST["newPhone"]);
    $_SESSION['address'] = clean_text($_POST["newAddress"]);
    $_SESSION['hobby'] = clean_text($_POST["newHobby"]);

    header('Location: user.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SettingMenu</title>

   
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
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
            <li><a href="user.php">Home</a></li>
            <li><a href="#">Notification</a></li>
            <li>
              <a href="#" class="desktop-link">Account</a>
              <input type="checkbox" id="show-features">
              <label for="show-features">Features</label>
              <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="index.php">Log-out</a></li>
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

    <div class="setting">
        <div class="d-flex align-items-start mt-5 mb-5">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-ProfileSetting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ProfileSetting" type="button" role="tab" aria-controls="v-pills-ProfileSetting" aria-selected="true">Profile Setting</button>
            <button class="nav-link " id="v-pills-ChangePassword-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ChangePassword" type="button" role="tab" aria-controls="v-pills-ChangePassword" aria-selected="false">Change Password</button>
            <button class="nav-link " id="v-pills-suport-tab" data-bs-toggle="pill" data-bs-target="#v-pills-suport" type="button" role="tab" aria-controls="v-pills-suport" aria-selected="false">suport</button>
            <button class="nav-link " id="v-pills-OptionalTab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-OptionalTab" type="button" role="tab" aria-controls="v-pills-OptionalTab" aria-selected="false">OptionalTab</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-ProfileSetting" role="tabpanel" aria-labelledby="v-pills-ProfileSetting-tab">
                <div class="container">                       
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input name='newName' type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input name='newEmail' type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input name='newPhone' type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input name='newAddress' type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input name='save' type="button" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade" id="v-pills-ChangePassword" role="tabpanel" aria-labelledby="v-pills-ChangePassword-tab">
                <div class="container">
                    <div class="col-sm-4">
                        <div class="row">
                            
                            <label>Current Password</label>
                            <div class="input-group"> 
                                <input type="password" value="123" name="userInput1" class="form-control" placeholder="Current Password"> 
                                <span class="btn material-icons">visibility</span>
                            </div> 
                               <label>New Password</label>
                            <div class="input-group"> 
                                <input type="password"  name="userInput2" class="form-control" placeholder="New Password"> 
                                <span class="btn material-icons">visibility</i></span>
                            </div> 
                               <label>Confirm Password</label>
                            <div class="input-group"> 
                                <input type="password" value="123" name="userInput3" class="form-control" placeholder="Confirm Password"> 
                                <span class="btn material-icons ">visibility</span>
                            </div>               
                        </div>  
                    </div>
                    <div class="row">
                        <div class="submid-button">
                            <input type="submit" class="btn btn-primary px-4" data-loading-text="Changing Password..." value="Change Password">
                    </div>
                    </div>
                </div>   
            </div>
            <div class="tab-pane fade" id="v-pills-suport" role="tabpanel" aria-labelledby="v-pills-suport-tab">...</div>
            <div class="tab-pane fade" id="v-pills-OptionalTab" role="tabpanel" aria-labelledby="v-pills-OptionalTab-tab">...</div>
            </div>
        </div>
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
    
    <script type="text/Javascript" src="ChangePassword.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
</body>
</html>