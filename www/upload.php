<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting your statu</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- bootstrap navbar -->
    <!-- font word for logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <!-- end of the logo -->
    <link rel="stylesheet" href="./css/upload.css">
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
                    <li>
                        <a href="#">Messages</a>
                        <input type="checkbox" id="show-messages">
                        <label for="show-messages">Messages</label>
                        <ul>
                            <li>akhfdfh</li>
                        </ul>
                    </li>
                    <li><a href="#">Notification</a></li>
                    <li>
                        <a href="#" class="desktop-link">Account</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Features</label>
                        <ul>
                            <li><a href="#" onclick="location.href='user_page.html'">Profile</a></li>
                            <li><a href="#">Setting</a></li>
                            <li><a href="#">Log Out</a></li>
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

    <main>

        <div class="frame-upload-image">

            <form action="" method="post">

                <div class="heading-post">

                    <div class="avatar">
                        <img src="./data/profileImage/avartar_<?php echo $_SESSION['no']?>.jpg" alt="image of the user" width="80px" height="80px">
                    </div>

                    <div class="name-user">
                        <p><?php echo $_SESSION['firstName']?></p>
                    </div>

                    <div class="optional-audience">

                        <select name="audience" id="choosing-audience">
                            <option value="Public">Public</option>
                            <option value="Friends">Friends</option>
                            <option value="Specific">Specific</option>
                            <option value="Only-me">Only me</option>
                        </select>

                    </div>
                </div>
                
                <textarea name="status" id="writing-status" cols="90" rows="10" placeholder="What is your mind ?" required></textarea>
                
                <div class="images-and-videos">
                    <input type="file" id="file" multiple>
                </div>
                <button type="submit">POST</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>