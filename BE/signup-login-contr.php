<?php

require_once 'signup-login.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["signup"])){
        $user=new stdClass();
        $user->fname=$_POST["fname"];
        $user->email=$_POST["email"];
        $user->username=$_POST["un"];
        $user->pass=$_POST["pass"];
        $user->cpass=$_POST["cpass"];
        $user->sex=$_POST["sex"];
        $user->aSkill=$_POST["artisticSkill"];
        $user->aStyle=$_POST["artisticStyle"];
        $user->dob=$_POST["dob"];
        $user-> eLevel=$_POST["expertiseLevel"];

       if(signUp($user)){
        session_start();
        $_SESSION["username"]=$user->username;
        $_SESSION["email"]=$user->email;
        echo "<script>alert('Login successful!');window.location.href ='../pages/template-index.php';</script>";
        exit;
       }
       else{
        echo "<script>alert('Login Unsuccessful!');window.location.href ='../pages/login.php';</script>";
        exit;
       }
    }

    if(isset($_POST["login"])){
        $user=new stdClass();
        $user->email=$_POST["email"];
        $user->pass=$_POST["pass"];

        if(login($user)){
            session_start();
            $_SESSION["username"]=getUsername($user);
            $_SESSION["email"]=$user->email;
            echo "<script>alert('Login successful!');window.location.href ='../pages/template-index.php';</script>";
            exit;
        
        }
        else{
            echo "<script>alert('Login Unsuccessful!');window.location.href ='../pages/login.php';</script>";
            exit;
           }
}
}

function signUp($user){
    $date=date('Y-m-d');
    if(!checkEmail($user->email)){
        echo "<script>alert('Email Already In Use!');window.location.href ='../index.php';</script>";
    }
    if($user->pass!==$user->cpass){
        echo "<script>alert('Passwords dont match!');window.location.href ='../index.php';</script>";
    }
    if($user->dob>=$date){
        echo "<script>alert('Invalid Date!');window.location.href ='../index.php';</script>";
    }

    if(addUser($user)){
        return true;
    }
    else{
        return false;
    }
}

function login($user){
    if(validate($user)){
       return true;
        }
        else{
            echo "<script>alert('Account Does Not Exist!');window.location.href ='../pages/login.php';</script>";
           }       
}

?>