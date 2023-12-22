<?php
require_once 'image.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    if(isset($_POST["addImg"])){
        $post=new stdClass();
        $post->desc=$_POST["desc"];
        $post->creator=$_POST["creator"];
        $post->pdate=$_POST["pdate"];
        session_start();
        $post->email=$_SESSION["email"];

        if (isset($_FILES['imgupload']) && $_FILES['imgupload']['error'] === UPLOAD_ERR_OK) {
            $targetDirectory = '../uploads/';
            $filename = basename($_FILES["imgupload"]["name"]);
            $targetFile = $targetDirectory . $filename;

            // Move uploaded file to the target location
            if (move_uploaded_file($_FILES["imgupload"]["tmp_name"], $targetFile)) {
                $post->img = $targetFile; 
            }
        }


        $post->id=addPost($post);
        if($post!==null){
            $targetFile = '../uploads/' . basename($_FILES["imgupload"]["name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);
            echo '<script language="javascript">';
            echo 'alert("Post Added!");';
            echo "window.location.href ='../pages/view-image.php?post_id={$post->id}';";
            echo '</script>';
            exit;
        }
        else{
            echo "<script language='javascript'>";
            echo "alert('Unsuccessfull!');";
            echo "window.location.href ='../pages/add-image.php'";
            echo "</script>";
            exit;
        }

    }

    if (isset($_POST["postId"])) {
        $postId = $_POST["postId"];
    
        
        $likeAdded = addLike($postId);
    
        if ($likeAdded) {
            echo "<script language='javascript'>";
            echo "window.location.href ='../pages/view-image.php?post_id={$postId}'";
            echo "</script>";
            exit;
           
        } else {
            echo "<script language='javascript'>";
            echo "window.location.href ='../pages/view-image.php?post_id={$postId}'";
            echo "</script>";
            exit;
        }
    }

    if (isset($_POST["postId2"])) {
        $postId = $_POST["postId2"];
    
        
        $dislikeAdded = addDislike($postId);
    
        if ($dislikeAdded) {
            echo "<script language='javascript'>";
            echo "window.location.href ='../pages/view-image.php?post_id={$postId}'";
            echo "</script>";
            exit;
           
        } else {
            echo "<script language='javascript'>";
            echo "window.location.href ='../pages/view-image.php?post_id={$postId}'";
            echo "</script>";
            exit;
        }
    }

    if (isset($_POST["cmnt"])) {
        $cmnt=new stdClass();
        $cmnt->cmnt=$_POST["cmnt"];
        $cmnt->cmnter=$_POST["cmnter"];
        $cmnt->pid=$_POST["pid"];
    
        
      
    
        if (addCmnt($cmnt)) {
            echo "<script language='javascript'>";
            echo "alert('Comment Added!');";
            echo "window.location.href ='../pages/view-image.php?post_id={$cmnt->pid}'";
            echo "</script>";
            exit;
           
        } else {
            echo "<script language='javascript'>";
            echo "alert('Could Not Add Comment!');";
            echo "window.location.href ='../pages/view-image.php?post_id={$cmnt->pid}'";
            echo "</script>";
            exit;
        }
    }


    
}

?>