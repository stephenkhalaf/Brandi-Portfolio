<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Admin</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-admin-error">
                    </div>
                     <form action="" method="POST" id="add-admin-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="name" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" type="email" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Job</label>
                                <input class="form-control" name="job" type="job" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Admin Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Normal Admin">Normal Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="summernote" class="form-control" ></textarea>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" autocomplete="off" type="text"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Admin" id="add-admin"/>
                            </div>

                            
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