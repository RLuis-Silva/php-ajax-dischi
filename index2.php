<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link foglio stile css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Milestone 2</title>
</head>
<body>
    <div class="app">
        <header>
            <div class="container">
                <img src="./img/logo.png" alt="logo spotify">
            </div>
        </header>

        <main>
            <div class="container">
                <!-- per ottenere i dati dal database, occorre fare un ciclo foreach! -->
                <div class="box-disco">
                    <img src="  " alt="immagine poster del cd">
                    <h4> titolo </h4>
                    <small> autore </small>
                    <div> anno </div>
                    <small> genere </small>   
                </div>    
            </div>
        </main>
    </div>
    <!-- link Vue.js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- link Axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- link file JS -->
    <script src="./js/main.js" ></script>
</body>
</html>