<?php include "partials/header.php" ?>
    <main>
        <section class="content">
            <div class="container" style="flex-direction: column;">
                <img src="images/blog-image.png" alt="" class="blog-image">
                <h1>Recent Post</h1>
                <div class="blog" id="blog">
                    <?php

                    $sql = mysqli_query($conn, "SELECT * FROM blog");
                    $limit = 3;
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;
                    $total = mysqli_num_rows($sql);
                    $totalPages = ceil($total / $limit);
                    $sql = mysqli_query($conn, "SELECT * FROM blog ORDER BY date DESC LIMIT $limit OFFSET $offset");
                    if (mysqli_num_rows($sql) > 0) {
                        while ($row = mysqli_fetch_assoc($sql)) {

                    ?>
                    <div class="blog-item">
                        <a href="blog-single.php?unique_id=<?php echo $row['unique_id']  ?>" class="blog-link">
                            <h3><?php echo $row['title'] ?></h3>
                            <h6><?php echo $row['date'] ?></h6>
                            <p class="post"><?php echo $row['headline'] ?></p>
                        </a>
                        <hr>
                    </div> 

                    <?php

                        }
                        } else {

                        ?>
                        <h3 style="margin: 0 auto;">No Post Available</h3>

                        <?php

                        }

                        ?>
                </div>

                <div class="pagination" id="pagination">
                        <?php if ($page > 1): ?>
                            <a href="blog.php?page=<?= $page - 1; ?>#blog" onclick="scrollToPagination()">Previous</a>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <?php if ($i == $page): ?>
                                <strong><?= $i; ?></strong>
                            <?php else: ?>
                                <a href="blog.php?page=<?= $i; ?>#blog" onclick="scrollToPagination()"><?= $i; ?></a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($page < $totalPages): ?>
                            <a href="blog.php?page=<?= $page + 1; ?>#blog" onclick="scrollToPagination()">Next</a>
                        <?php endif; ?>
                </div>
            </div>
            <ul class="footer">
                <li><img src="images/logo-instagram.svg" alt=""></li>
                <li><a href="https://www.linkedin.com/in/brandimummery" target="_blank"><img src="images/logo-linkedin.svg" alt=""></a></li>
                <li><a href="https://x.com/brandicodes" target="_blank"><img src="images/logo-twitter.svg" alt=""></a></li>
                <li><a href="https://github.com/bmumz" target="_blank"><img src="images/logo-github.svg" alt=""></a></li>
            </ul>
        </section>
    </main>
   
    <script src="script.js"></script>
    <script src="Javascript/blog.js"></script>

    <script>
        function scrollToPagination() {
        const pagination = document.getElementById('blog');
        pagination.scrollIntoView({
            behavior: 'smooth'
        });
    }
    </script>
</body>
</html>