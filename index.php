<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <header>
       <div class="container">
            <img src="" alt="logo spotify">
       </div>
   </header> 
   
   <main>
        <!-- import database album -->
        <?php require_once __DIR__ . './database.php' ?>
        <div class="container album-wrap d-flex wrap">
            <!-- generating album cycle -->
            <?php foreach ($database as $key => $album) { ?>
                <div class="album-box d-flex flex-col">
                    <!-- info albums -->
                    <img src="<?php echo $album['poster']?>" alt="">
                    <h3>
                        <?php echo $album['title'];
                        ?>
                    </h3>
                    <h5>
                        <?php echo $album['author'];
                        ?>
                    </h5>
                    <h3>
                        <?php echo $album['year'];
                        ?>
                    </h3>
                    <h3>
                        <?php echo $album['genre'];
                        ?>
                    </h3>
                </div>
            <?php } ?>
        </div>
   </main> 
</body>
</html>