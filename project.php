<?php include "partials/header.php" ?>
    <main>
        <section class="content">
            <div class="container">
                <article class="profile">
                    <img src="images/brandi.jpg" alt="">
                    <div class="name"> <?php echo $user['name'] ?></div>
                    <hr>
                    <div class="title">
                        <h4><?php echo $user['job'] ?></h4>
                        <h6 class="country" style="position: relative;">Toronto, ON   <img src="images/canada.jfif" alt="" class="canada" style="width:20px;height: 20px; object-fit: cover; position: absolute; top:-1px;padding-left:3px" /></h6>
                    </div>
                </article>
                <article class="stats">
                    <img src="https://github-readme-stats.vercel.app/api?username=bmumz&theme=vue" alt="">
                </article>
            </div>


            <div class="accordion" id="accordionExample">
              <?php

              $sql = mysqli_query($conn, "SELECT * FROM project");
              if (mysqli_num_rows($sql) > 0) {
                  while ($row = mysqli_fetch_assoc($sql)) {

              ?>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $row['id']  ?>" aria-expanded="false" aria-controls="collapseTwo">
                      <?php echo $row['title']  ?>
                    </button>
                  </h2>
                  <div id="<?php echo $row['id']  ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="accordion-1">
                        <?php echo $row['post']  ?>

                        <div class="accordion-link">
                          <button><a href="<?php echo $row['live_link']  ?>" style="color:white" target="_blank">View Live</a></button>
                          <button><a href="<?php echo $row['source_link']  ?>" style="color:white" target="_blank">Source Code</a></button>
                        </div>
                      </div>
                      <div class="accordion-2">
                        <img src="uploads/<?php echo $row['image']  ?>" alt="">
                      </div>
                    </div>
                  </div>
                </div>


                <?php

                        }
                        }

                   ?>

              </div>



              <ul class="footer">
                <li><img src="images/logo-instagram.svg" alt=""></li>
                <li><a href="https://www.linkedin.com/in/brandimummery" target="_blank"><img src="images/logo-linkedin.svg" alt=""></a></li>
                <li><a href="https://x.com/brandicodes" target="_blank"><img src="images/logo-twitter.svg" alt=""></a></li>
                <li><a href="https://github.com/bmumz" target="_blank"><img src="images/logo-github.svg" alt=""></a></li>
            </ul>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>