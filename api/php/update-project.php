<?php
include_once "../config/database.php";

$title = mysqli_escape_string($conn, $_POST['title']);
$post = mysqli_escape_string($conn, $_POST['post']);
$live_link = mysqli_escape_string($conn, $_POST['live_link']);
$source_link = mysqli_escape_string($conn, $_POST['source_link']);
$id = mysqli_escape_string($conn,$_POST['id']);
$error = "";

if(!empty($title) && !empty($post) && !empty($live_link) && !empty($source_link)){
      
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $image_name = $_FILES['image']['name'];
            $image_type = explode('.', $image_name)[1];
            $ext = ['png','jpeg','jfif','jpg'];
            if(in_array($image_type, $ext)){
                $new_img = time().$image_name;
                $unique_id = time();
                if((move_uploaded_file($_FILES['image']['tmp_name'], "../../uploads/".$new_img))){
                    $sql2 = mysqli_query($conn, "UPDATE project 
                            SET title = '$title', post = '$post', live_link = '$live_link' , source_link = '$source_link', image = '$new_img' WHERE id = $id");
                    if($sql2){
                        echo "success";
                    }else{
                        $error = "
                            <div class='alert alert-danger'>
                                <strong>An error occurred!</strong>
                            </div>
                        ";
                    }
                }
            }else{
                $error = "
                        <div class='alert alert-danger'>
                             <strong>Select image with the extentions - png, jpg, jpeg or jfif </strong>
                        </div>
                    ";
                
            }
           
        }else{
            $sql3 = mysqli_query($conn, "UPDATE project 
            SET title = '$title', post = '$post', live_link = '$live_link' , source_link = '$source_link' WHERE id = $id");
            if($sql3){
                echo "success";
            }else{
                $error = "
                    <div class='alert alert-danger'>
                        <strong>An error occurred!</strong>
                    </div>
                ";
            }

        }      
        
    }
else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
        </div>";
}

echo $error;

?>