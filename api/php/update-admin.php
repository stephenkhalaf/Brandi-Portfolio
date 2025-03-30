<?php
include_once "../config/database.php";

$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$password = mysqli_escape_string($conn, $_POST['password']);
$type = mysqli_escape_string($conn, $_POST['type']);
$job = mysqli_escape_string($conn, $_POST['job']);
$description = mysqli_escape_string($conn, $_POST['description']);
$id = mysqli_escape_string($conn,$_POST['id']);
$error = "";

if(!empty($name) && !empty($email) && !empty($password) && !empty($job) && !empty($description)){
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "<div class='alert alert-danger'>
                     <strong>Incorrect Email!</strong>
                 </div>";
    }else if(strlen($password) < 6){
        $error = "<div class='alert alert-danger'>
                    <strong>password length must be more than 6!</strong>
            </div>";
    }else{
      
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $image_name = $_FILES['image']['name'];
            $image_type = explode('.', $image_name)[1];
            $ext = ['png','jpeg','jfif','jpg'];
            if(in_array($image_type, $ext)){
                $new_img = time().$image_name;
                $unique_id = time();
                if((move_uploaded_file($_FILES['image']['tmp_name'], "../../uploads/".$new_img))){
                    $sql2 = mysqli_query($conn, "UPDATE admin 
                            SET name = '$name', email = '$email', password = '$password' , type = '$type', image = '$new_img', job = '$job', description = '$description' WHERE id = $id");
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
            $sql3 = mysqli_query($conn, "UPDATE admin 
            SET name = '$name', email = '$email', password = '$password' , type = '$type', job = '$job', description = '$description' WHERE id = $id");
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

}else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
        </div>";
}

echo $error;

?>