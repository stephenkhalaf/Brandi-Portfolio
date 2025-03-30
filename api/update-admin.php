<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Admin</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['admin_id'])){
                        $id = $_GET['admin_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");
                        $admin = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="name" value="<?php echo $admin['name']; ?>" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email"  value="<?php echo $admin['email']; ?>" type="email" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Job</label>
                                <input class="form-control" name="job"  value="<?php echo $admin['job']; ?>" type="job" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" value="<?php echo $admin['password']; ?>" autocomplete="off" type="text"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $admin['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>


                            <div class="form-group">
                                <label>Admin Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Normal Admin" <?php if($admin['type'] == 'Normal Admin') echo "selected"; ?>>Normal Admin</option>
                                    <option value="Super Admin" <?php if($admin['type'] == 'Super Admin') echo "selected"; ?>>Super Admin</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="summernote" class="form-control"> <?php echo $admin['description']  ?></textarea>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Admin" id="update-admin"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $admin['id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>
<script src="assets/summernote/summernote-lite.min.js"></script>
<link rel="stylesheet" href="assets/summernote/summernote-lite.min.css">
<script>
    $(document).ready(function(){
        $('#summernote').summernote({height:250})
    })
</script>

