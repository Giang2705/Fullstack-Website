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

    $rename = 'avartar_'.$_SESSION['no'].'';

    echo $rename;
    $newname = $rename.'.'.$extention;
    
    
    move_uploaded_file($_FILES["imgProfile"]["tmp_name"], 'data/profileImage/'.$newname);
    
    
        $result = $newname;
        // echo '<img src="./data/profileImage/'.$result.'">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userprofile</title>
    
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
    <div class="container">
        <form action="" method="post">
        <div class="row mb-3">
            <div class="col-sm-3">
              <div class="profile-pic-wrapper">
                <div class="pic-holder">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="imgProfile">
                    Upload your profile image:</label>
                    <input type="file" name="imgProfile" id="imgProfile">
                    <img src="./data/profileImage/<?php echo $result?>jpg" style="height: 150px; width: 150px" alt="">
                    <input type="submit" value="Upload Image" name="submit_image">
                </form>
                    <div class="text-center">
                      <div class="mb-2">
                        <i class="fa fa-camera fa-2x"></i>
                      </div>
                      <div class="text-uppercase">
                        Update <br /> Profile Photo
                      </div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="">
            </div>
          </div>       
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="<?php echo $_SESSION['firstName']?>" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="<?php echo $_SESSION['email']?>" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="" name="phone">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Mobile</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="" name="mobile">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="" name="address">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9 text-secondary">
                <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
            </div>
        
        </div>
        </form>    
    </div>
    
</body>
