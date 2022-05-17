<?php
session_start();

$name=$_POST['username'];
$pass=$_POST['password'];
$csv='accounts_db.csv';
$fh=fopen($csv,'r');
$error=0;
while(list($no, $firstName, $lastName, $email, $password, $userType)=fgetcsv($fh,1024,',')){
    if(($name==$email)&&(password_verify($pass,$password)==true))
    {   
        while($error<1){
            if($userType=="user"){
                $_SESSION['firstName']=$firstName;
                $_SESSION['lastName']=$lastName;
                header("Location:user.php");
            } else{
                header("Location:admin.php");
            }
        
        $error=$error+1;
        }
    }elseif((($name==$email)&&($pass!==$password)) ||(($name!==$email)&&($pass==$password))){
        while($error<1){
        header("Location:index.php");
        $error=$error+1;
        }
        }
        
}

?> 
