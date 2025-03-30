<?php
include_once "../config/database.php";

$title = mysqli_escape_string($conn, $_POST['title']);
$post = mysqli_escape_string($conn, $_POST['post']);
$headline = mysqli_escape_string($conn, $_POST['headline']);
$date = mysqli_escape_string($conn, $_POST['date']);
$id = mysqli_escape_string($conn,$_POST['id']);
$error = "";

if(!empty($title) && !empty($post) && !empty($date) && !empty($headline)){
            $sql = mysqli_query($conn, "UPDATE blog 
            SET title = '$title', post = '$post', date = '$date', headline = '$headline' WHERE id = $id");
            if($sql){
                echo "success";
            }else{
                $error = "
                    <div class='alert alert-danger'>
                        <strong>An error occurred!</strong>
                    </div>
                ";
            }    
        
    }else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
             </div>";
}

echo $error;

?>