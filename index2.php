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
    <header>
        <div class="container">
            <img src="./img/logo.png" alt="logo spotify">
        </div>
    </header>

    <main>
        <div class="container">
            <!-- per ottenere i dati dal database, occorre fare un ciclo foreach! -->
            <?php 
                foreach( $database as $data_cd ){ ?>
                    <!-- faccio una stampa di prova degli elementi dell'array
                    dovrei ottenere una array di cd con le parole chiavi.. -->
                    <!-- var_dump($data_cd);  -->
                    <div class="box-disco">
                        <img src=" <?php echo $data_cd['poster']; ?> " alt="immagine poster del cd">
                        <h4> <?php echo $data_cd['title']; ?> </h4>
                        <small> <?php echo $data_cd['author']; ?> </small>
                        <div> <?php echo $data_cd['year']; ?> </div>
                        <small> <?php echo $data_cd['genre']; ?> </small>   
                    </div>    
            <?php } ?>
        </div>
    </main>

    <!-- link file JS -->
    <script src="./js/main.js" ></script>
</body>
</html>