<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['firstName']?> | InsaKilogram</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- bootstrap navbar -->
    <!-- font word for logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <!-- end of the logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon pen-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/user.css">
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
                <li><a href="./settingmenu.html">Setting</a></li>
                <li><a href="#">Log-out</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <a href="index.php" class="logout">Log out</a>
        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="#" class="search-box">
          <input type="text" placeholder="Type Something to Search..." required>
          <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
      </nav>
    </div>
    

  </header>
    <main>

        <div class="frame-userpage">

            <div class="heading-profile">

                <div class="avatar">

                    <img src="./data/profileImage/avartar_<?php echo $_SESSION['no']?>.jpg" alt="user-image" width="200" height="200">

                </div>

                <div class="profile-setting">

                    <h1 class="user-name"><?php echo $_SESSION['firstName']?></h1>

                    <button class="btn-editing-profile"><i class="fa fa-pencil" aria-hidden="true"></i> <a href="./userProfile.php">Personal editing</a></button>

                </div>

                <div class="profile-interact">

                    <ul>
                        <li><span class="number-count">6</span> posts</li>
                        <li><span class="number-count">12</span> followers</li>
                        <li><span class="number-count">20</span> following</li>
                    </ul>

                </div>

            </div>
            <!-- end of the head profile -->

            <div class="information-user">

                <ul>
                    <li>Born: 26 January, 2001<span> - 21</span></li>
                    <li>Male</li>
                    <li>Live in Ho Chi Minh City</li>
                    <li>Study at RMIT University</li>
                </ul>

            </div>

            <div class="frame-upload">

                <div class="users-statu" onclick="location.href='upload.php'">
                    <h5>Your status ?</h5>
                </div>
                <button type="button" onclick="location.href='upload.php'">POST</button>

            </div>

        </div>
        <!-- end of the user profile -->

        <div class="personal-status">
        
        </div>
    </main>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>