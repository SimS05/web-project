<?php

require_once 'db.php';

function addPost($post){
    $db=DBConnect();
    $stmt=$db->prepare("INSERT into post(img,uemail,likes,dislikes,pdate) VALUES(:img,:uemail,:likes,:dislikes,:pdate);");
    $stmt->bindParam(':img', $post->img);
    $stmt->bindParam(':uemail', $post->email);
    $stmt->bindValue(':likes', 0, PDO::PARAM_INT); 
    $stmt->bindValue(':dislikes', 0, PDO::PARAM_INT); 
    $stmt->bindParam(':pdate', $post->pdate);
    if($stmt->execute()){
        return $db->lastInsertId();
    }
    return null;
}

function getImgfromId($id){
    $db=DBConnect();
    $stmt=$db->prepare("Select img from post where post_id=:id");
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
        $obj=$stmt->fetch(PDO::FETCH_OBJ);
        return $obj->img;
    }

    
    return null;
}




?>