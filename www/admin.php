<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">

    
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
    <main>
    <h1>Admin Page</h1>
    <?php
    function get_html($csv_file){
        $html = '<table class="table table-bordered">';
        $file = fopen($csv_file, 'r');
        $header_arr = fgetcsv($file);
        $html.='<thead class="bg-primary">';
        foreach($header_arr as $k => $v){
            $html.='<th>'.$v.'</th>';
        }
        $html.='<th>';
        $html.='Edit';
        $html.='</th>';
        $html.='</thead>';

        $html.='<tbody>';
        while($line = fgetcsv($file)){

            $html.='<tr>';
            foreach($line as $k => $v){
                $html.='<td>'.$v.'</td>';
            }
            $html.='<td class="text-center">';
              $html.='<form action="delete.php" method="post">';
                $html.= '<input class="btn btn-danger me-3" name="btn_'.$v.'" type="submit" value="Delete"/>';
                $html.= '<input class="btn btn-primary" type="submit" value="View"/>';
              $html.='</form>';
            $html.='</td>';
            $html.='</tr>';
        }
        $html.='</tbody>';
        $html.='</table>';

        return $html;
    }

    echo get_html('accounts_db.csv');
?>
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
</body>

<script src="./admin.js"></script>
</html>