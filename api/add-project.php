<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Project</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-project-error">
                    </div>
                     <form action="" method="POST" id="add-project-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Post</label>
                                <textarea name="post" id="summernote" class="form-control" ></textarea>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Live Link</label>
                                <input class="form-control" name="live_link" autocomplete="off" type="text"/>
                            </div>

                            <div class="form-group">
                                <label>Source Code Link</label>
                                <input class="form-control" name="source_link" autocomplete="off" type="text"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Project" id="add-project"/>
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