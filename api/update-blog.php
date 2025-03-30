<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Blog</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['blog_id'])){
                        $id = $_GET['blog_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM blog WHERE id = $id");
                        $blog = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-blog-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="<?php echo $blog['title']; ?>" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" name="date"  value="<?php echo $blog['date']; ?>" type="date" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Headline</label>
                                <textarea name="headline" class="form-control"> <?php echo $blog['headline']  ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Post</label>
                                <textarea name="post" id="summernote" class="form-control"> <?php echo $blog['post']  ?></textarea>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Blog" id="update-blog"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $blog['id'] ?>">
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

