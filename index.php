<?php include "partials/header.php" ?>
    <main>
        <section class="content">
            <div class="container">
                <article class="profile">
                    <img src="images/brandi.jpg" alt="">
                    <div class="name"> <?php echo $user['name'] ?></div>
                    <hr>
                    <div class="title">
                        <h4 class="job"><?php echo $user['job'] ?></h4>
                        <h6 class="country" style="position: relative;">Toronto, ON   <img src="images/canada.jfif" alt="" class="canada" style="width:20px;height: 20px; object-fit: cover; position: absolute; top:-5px;padding-left:3px" /></h6>
                    </div>
                </article>
                <article class="description">
                <?php echo $user['description'] ?>
                </article>
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
</body>
</html>