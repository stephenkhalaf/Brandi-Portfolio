<?php include "partials/header.php" ?>
<?php
    if(isset($_GET['unique_id'])){
        $id = $_GET['unique_id'];
        $sql = mysqli_query($conn, "SELECT * FROM blog WHERE unique_id = $id");
        $blog = mysqli_fetch_assoc($sql);
    }else{
        header('Location: ./blog.php');
    }
?>
    <main>
        <section class="content">
            <div class="container" style="flex-direction: column;">
                <div class="blog">
                    <a href="blog.php"><img src="images/arrow-back-sharp.svg" alt="" style="width:30px;height:30px; object-fit: cover; cursor: pointer;"></a>
                    <div class="blog-item">
                        <h3 style="text-align: center ;"><?php echo $blog['title'] ?></h3>
                        <h6><?php echo $blog['date'] ?></h6>
                        <p>
                        <?php echo $blog['post'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
    <script src="script.js"></script>
</body>
</html>