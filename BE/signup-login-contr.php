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
        echo '<script language="javascript">';
        echo 'alert("Login Successful!");';
        echo 'window.location.href ="../pages/indexx.php";';
        echo '</script>';
        exit;
       }
       else{
        echo '<script>alert("Login Unsuccessful!");</script>';
        echo '<script language="javascript">';
        echo 'alert("Login Unsuccessful!");';
        echo 'window.location.href ="../index.php";';
        echo '</script>';
        exit;
       }
    }

    if(isset($_POST["login"])){
        $user=new stdClass();
        $user->email=$_POST["email"];
        $user->pass=$_POST["pass"];

        if(login($user)){
            session_start();
            $_SESSION["username"]=$user->username;
            $_SESSION["email"]=$user->email;
             echo '<script language="javascript">';
             echo 'alert("Login Successful!");';
            echo 'window.location.href ="../pages/indexx.php";';
            echo '</script>';
        exit;
        }
        else{
            echo '<script>alert("Login Unsuccessful!");</script>';
            echo '<script language="javascript">';
            echo 'alert("Login Unsuccessful!");';
            echo 'window.location.href ="../pages/another_page.php";';
            echo '</script>';
            exit;
           }
}
}

function signUp($user){
    $date=date('Y-m-d');
    if(!checkEmail($user->email)){
        header("location:../index.php?eerr=Email Already In Use");
    }
    if($user->pass!==$user->cpass){
        header("location:../index.php?perr={Passwords dont match} & cperr={Passwords dont match}");
    }
    if($user->dob>=$date){
        header("location:../index.php?derr={Invalid Date}");
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
            header("location:../pages/another_page.php?uerr=Account Does Not Exist");
           }       
}

?>