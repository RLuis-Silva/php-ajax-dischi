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
    <div id ="app">
        <header>
            <div class="container">
                <img src="./img/logo.png" alt="logo spotify">
                <select v-mode="filterArtist" @change="getFiltered">
                    <option value="all">Tutti </option>
                    <!-- creo altri option in modo dinamico! -->
                    <option v-for="artist in artists" :value="artist">
                        {{artist}}
                    </option>
                </select>
            </div>
        </header>

        <main>
            <div class="container">
                <div v-for="album in albums" class="box-disco">
                    <img :src=" album.poster " alt="immagine poster del cd">
                    <h4> {{album.title}} </h4>
                    <small> {{album.author}} </small>
                    <div> {{album.year}} </div>
                    <small> {{album.genre}} </small>   
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