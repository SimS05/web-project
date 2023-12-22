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
                $post->img = $targetFile; // Set the image path in $post->img
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
}




?>