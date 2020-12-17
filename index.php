<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Spotify php</title>
</head>
<body>
   <header>
       <div class="header-nav z-1 p-fixed">
           <div class="container">
               <img src="./dist/img/logo.png" alt="logo spotify">
           </div>
       </div>
   </header> 
   
   <main>
        <!-- import database album -->
        <?php require_once __DIR__ . './database.php' ?>
        <div class="album-wrap d-flex flex-col">
            <ul class="d-flex container wrap">
                <!-- generating album cycle -->
                <?php foreach ($database as $key => $album) { ?>
                    <li class="album-box d-flex flex-col">
                        <!-- info albums -->
                        <img src="<?php echo $album['poster']?>" alt="">
                        <h3 class="main-weight">
                            <?php echo $album['title'];
                            ?>
                        </h3>
                        <h5 class="light-weight">
                            <?php echo $album['author'];
                            ?>
                        </h5>
                        <h3 class="main-weight">
                            <?php echo $album['year'];
                            ?>
                        </h3>
                        <h3 class="light-weight">
                            <?php echo $album['genre'];
                            ?>
                        </h3>
                </li>
                <?php } ?>
            </ul>
        </div>
   </main> 
</body>
</html>