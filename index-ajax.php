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
   <div id="app">
        <header>
            <div class="header-nav z-1 p-fixed">
                <div class="container">
                    <img src="./dist/img/logo.png" alt="logo spotify">
                </div>
            </div>
        </header> 
        
        <main>
            <div class="album-wrap d-flex flex-col">
                <ul class="d-flex container wrap">
                    <li v-for="album in albums" class="album-box d-flex flex-col">
                        <img :src="album.poster" alt="album poster">
                        <h3 class="main-weight">
                            {{ album.title }}
                        </h3>
                        <h5 class="light-weight">
                            {{ album.author }}
                        </h5>
                        <h3 class="main-weight">
                            {{ album.year }}
                        </h3>
                        <h3 class="light-weight">
                            {{ album.genre }}
                        </h3>
                    </li>
                </ul>
            </div>
        </main> 
   </div> 


<!-- JS -->
<script src="./dist/js/main.js"></script>
</body>
</html>