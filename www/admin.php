<?php
session_start();
?>
<!DOCTYPE html>
<htmml lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

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
            <li><a href="admin.php">Home</a></li>
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

    <main>
    <h1>Admin Page</h1>
    <div class="avatar">

                    <img src="./data/profileImage/avartar_0.jpg" alt="user-image" width="200" height="200">

                </div>

                <div class="profile-setting">

                    <h1 class="user-name">Giang</h1>

                </div>
    <?php
    function get_html($csv_file){
        $html = '<table class="table table-bordered">';
        $file = fopen($csv_file, 'r');
        $i = 0;
        $html.='<thead class="bg-primary">';
          $html.='<th>No</th>';
          $html.='<th>First Name</th>';
          $html.='<th>Last Name</th>';
          $html.='<th>Email</th>';
          $html.='<th>Phone</th>';
          $html.='<th>Address</th>';
          $html.='<th>Hobby</th>';
          $html.='<th>Password</th>';
          $html.='<th>User Type</th>';
          $html.='<th>Edit</th>';
          $html.='</thead>';
        $html.='<tbody>';
        while($line = fgetcsv($file)){
            $i = $i + 1;
            $html.='<tr>';
            foreach($line as $k => $v){
                $html.='<td>'.$v.'</td>';
            }
            $html.='<td class="text-center">';
              $html.='<form action="delete.php" method="post">';
                $html.= '<input class="btn btn-danger me-3" name="btnDelete_'.$i.'" type="submit" value="Delete"/>';
              $html.='</form>';
            $html.='</td>';
            $html.='</tr>';
        }
        $html.='</tbody>';
        $html.='</table>';
        
        return $html;
    }
    echo get_html('./data/accounts_db.csv');
    
?>
    </main>

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
</body>

<script src="./admin.js"></script>
</htmml>