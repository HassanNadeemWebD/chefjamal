<?php

include "config.php";
session_start();
if (isset($_POST['login'])) {

   $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $encryptPassword = sha1($_POST['password']);


    $login=  "SELECT * FROM users WHERE email = '$email' AND  password = '$encryptPassword' ";

    $data = mysqli_query($conn, $login);
    $row = mysqli_fetch_assoc($data);
    // $userID = $row['UserID']
    if($row !== 0){
    $userName = $row['userName'];

    if(isset($_POST['rememberMe'])){
        setcookie('useremail',$_POST['email'],time()+4000);
        setcookie('userpassword',$_POST['password'],time()+4000);
        echo "cookies are set";
    }
    // else{
    //     echo "cookies are not set";
    // }
    
    // if(isset($_POST['forget'])){
    //     setcookie('useremail',$_POST['email'],time()-4000);
    //     setcookie('userpassword',$_POST['password'],time()-4000);
    // }
    $_SESSION['user'] = $userName;

    echo  $_SESSION['user'] ;

   
}else{

    echo "Login Failed";

}

}
?>