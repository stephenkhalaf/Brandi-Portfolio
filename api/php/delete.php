<?php
include_once "../config/database.php";
if(isset($_GET['admin_id'])){
    $admin_id = $_GET['admin_id'];
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE unique_id = $admin_id");
    $admin = mysqli_fetch_assoc($sql);
    
    if($admin_id == '1725101080'){
        header("Location: ../admin.php"); 
    }else if($admin['type'] == 'Super Admin'){
        header("Location: ../admin.php");
    }else{
        $image = $admin['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM admin WHERE (unique_id = $admin_id)");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
        header("Location: ../admin.php");
    }
}




if(isset($_GET['picture_id'])){
    $picture_id = $_GET['picture_id'];

    $sql = mysqli_query($conn, "SELECT * FROM pictures WHERE unique_id = $picture_id ");
    if($sql){
        $picture = mysqli_fetch_assoc($sql);
        $image = $picture['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM pictures WHERE unique_id = $picture_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    

    header("Location: ../pictures.php");
}



if(isset($_GET['message_id'])){
    $message_id = $_GET['message_id'];

    $sql = mysqli_query($conn, "DELETE FROM message WHERE unique_id = $message_id");
    header("Location: ../message.php");
}


if(isset($_GET['blog_id'])){
    $blog_id= $_GET['blog_id'];

    $sql = mysqli_query($conn, "DELETE FROM blog WHERE unique_id = $blog_id");
    header("Location: ../blog.php");
}
?>