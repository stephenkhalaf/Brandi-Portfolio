<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Project</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['project_id'])){
                        $id = $_GET['project_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM project WHERE id = $id");
                        $project = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-project-form">
                        <div class="col-lg-12 col-md-12">

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="<?php echo $project['title']; ?>" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Post</label>
                                <textarea name="post" id="summernote" class="form-control" ><?php echo $project['post']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $project['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" name="image" autocomplete="off"  type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Live Link</label>
                                <input class="form-control" name="live_link" autocomplete="off" value="<?php echo $project['live_link']; ?>"  type="text"/>
                            </div>

                            <div class="form-group">
                                <label>Source Code Link</label>
                                <input class="form-control" name="source_link" value="<?php echo $project['source_link']; ?>" autocomplete="off" type="text"/>
                            </div>
                            

                           

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Project" id="update-project"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $project['id'] ?>">
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

