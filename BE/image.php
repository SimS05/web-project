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

function getPost($id){
    $db=DBConnect();
    $stmt=$db->prepare("SELECT * FROM post WHERE post_id=:id");
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
        $obj=$stmt->fetch(PDO::FETCH_OBJ);
        return $obj;
    }

    
    return null;
}

function getImgIds(){
    $array=array();
    $db=DBConnect();
    $stmt=$db->prepare("SELECT post_id FROM post");
    if($stmt->execute()){
        while($obj=$stmt->fetch(PDO::FETCH_OBJ)){
            $array[]=$obj->post_id;
        }
        rsort($array);
        return $array;
        
    } 
    return null;
}

function addLike($id){
    $db = DBConnect();
    $stmt = $db->prepare("UPDATE post SET `likes` = `likes` + 1 WHERE post_id = :id");
    $stmt->bindParam(':id', $id);
    
    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
}

function addDislike($id){
    $db = DBConnect();
    $stmt = $db->prepare("UPDATE post SET `dislikes` = `dislikes` + 1 WHERE post_id = :id");
    $stmt->bindParam(':id', $id);
    
    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
}

function addCmnt($cmnt){
    $db = DBConnect();
    $stmt = $db->prepare("INSERT INTO comment(commenter,comment,post_id) VALUES(:cmnter,:cmnt,:pid)");
    $stmt->bindParam(':cmnter', $cmnt->cmnter);
    $stmt->bindParam(':cmnt', $cmnt->cmnt);
    $stmt->bindParam(':pid', $cmnt->pid);
    
    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
}

function retreivecmnt($id){
    $array=array();
    $db = DBConnect();
    $stmt = $db->prepare("SELECT * from comment where post_id=:pid");
    $stmt->bindParam(':pid', $id);
    
    if($stmt->execute()){
        while($obj=$stmt->fetch(PDO::FETCH_OBJ)){
            $array[]=$obj;
        }
        return $array;
    } else {
        return null;
    }
}








?>