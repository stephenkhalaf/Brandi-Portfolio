<?php include "api/config/database.php" ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM admin WHERE unique_id = 1725101155");
$user = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="/brandi" class="nav__logo"><img src="images/brandi.jpg" alt="" class="font-logo">
                    <div class="profile">
                        <div class="profile-name"><?php echo $user['name'] ?></div>
                        <div class="profile-title"><?php echo $user['job'] ?></div>
                    </div>
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <img src="Icons/menu.svg" alt=""  class="nav__toggle-menu font-logo">
                    <img src="icons/close.svg" alt=""  class="nav__toggle-close font-logo">
                </div>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="index.php" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="project.php" class="nav__link">Project</a>
                    </li>
                    <li>
                        <a href="blog.php" class="nav__link">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav__link">Contact</a>
                    </li>
                    <li>
                        <a href="/brandi/api" class="nav__link">Admin</a>
                    </li>    
                </ul>
            </div>
        </nav>
    </header>