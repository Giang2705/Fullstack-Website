<?php
session_start();

$name=$_POST['username'];
$pass=$_POST['password'];
$csv='./data/accounts_db.csv';
$fh=fopen($csv,'r');
$error=0;
while(list($no, $firstName, $lastName, $email, $phone, $address, $hobby, $password, $userType)=fgetcsv($fh,1024,',')){
    if(($name==$email)&&(password_verify($pass,$password)==true))
    {   
        while($error<1){
            if($userType=="user"){
                $_SESSION['no'] = $no;
                $_SESSION['firstName']=$firstName;
                $_SESSION['lastName']=$lastName;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] =   $phone ;
                $_SESSION['address'] = $address ;
                $_SESSION['hobby'] =  $hobby ;
                $_SESSION['password'] = $password;
                $_SESSION['userType'] = $userType;
                

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
