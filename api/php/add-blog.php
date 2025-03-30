<?php
include_once "../config/database.php";

$title = mysqli_escape_string($conn, $_POST['title']);
$date = mysqli_escape_string($conn, $_POST['date']);
$headline = mysqli_escape_string($conn, $_POST['headline']);
$post = mysqli_escape_string($conn, $_POST['post']);

$error = "";

if(!empty($title) && !empty($date) && !empty($post) && !empty($headline)){
   
    $unique_id = time();
    $sql = mysqli_query($conn, "INSERT INTO blog 
        (unique_id,title,date, post, headline) VALUES ($unique_id,'$title','$date', '$post', '$headline') ");
        if($sql){
            echo "success";
        }else{
            $error = "
                <div class='alert alert-danger'>
                        <strong>An error occurred!</strong>
                </div>
            ";
        }
               
        
    }
else{
    $error = "
                <strong>All Fields Are Required!</strong>
        ";
}

echo $error;
?>