<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password?</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forgotP.css">
</head>
<body>
    <div id="c1" class="rounded-circle"></div>
    <div id="c2" class="rounded-circle"></div>
    <div class="forgetp">
        <h1>Forget Password</h1>
        <form action="">
            <div class="txt_field">
                <input type="email" placeholder="Enter your email">
            </div>
            <hr id="hr1">
            <h3 id="or" class="text-black-50 fw-bolder text-center my-3">OR</h3>
            <hr id="hr2">   
            <div class="txt_field">
                <input type="text" placeholder="Enter your username" >
            </div>
            <div>
                <a href="verify.php"><input id="sendbtn" class="fw-bold" type="submit" value="Send email verification"></a>
            </div>
            <p id="back"><a href="index.php">Back</a></p>
        </form>
    </div>
</body>
</html>