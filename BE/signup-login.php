<?php

require_once 'db.php';

function checkEmail($email){
    $db = DBConnect();
    $stmt = $db->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    
    if ($stmt->execute()) {
        $num = $stmt->rowCount();
        return $num == 0;
    }
    return false;
}

function addUser($user){
    $db = DBConnect();
    $stmt = $db->prepare("INSERT INTO user (fname, username, email, pass, skill, style, expertise, sex, dob) VALUES (:fname, :username, :email, :pass, :skill, :style, :expertise, :sex, :dob)");
    
    $stmt->bindParam(':fname', $user->fname);
    $stmt->bindParam(':username', $user->username);
    $stmt->bindParam(':email', $user->email);
    $stmt->bindParam(':pass', $user->pass);
    $stmt->bindParam(':skill', $user->aSkill);
    $stmt->bindParam(':style', $user->aStyle);
    $stmt->bindParam(':expertise', $user->eLevel);
    $stmt->bindParam(':sex', $user->sex);
    $stmt->bindParam(':dob', $user->dob);
    
    if ($stmt->execute()) {
        return true;
    }
    return false;
}

function validate($user){
    $db=DBConnect();
    $stmt=$db->prepare("SELECT * from user where email=:email AND pass=:pass;");
    $stmt->bindParam(':email', $user->email);
    $stmt->bindParam(':pass', $user->pass);
    if($stmt->execute()){
        $num=$stmt->rowCount();
        if($num>=1){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}

function getUsername($user){
    $db=DBConnect();
    $stmt=$db->prepare("SELECT username FROM user WHERE email=:email;");
    $stmt->bindParam(':email',$user->email);
    $stmt->execute();
    $obj=$stmt->fetch(PDO::FETCH_OBJ);
    return $obj->username;
}

function getUsernamebyID($email){
    $db=DBConnect();
    $stmt=$db->prepare("SELECT username FROM user WHERE email=:email;");
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    $obj=$stmt->fetch(PDO::FETCH_OBJ);
    return $obj->username;
}

?>