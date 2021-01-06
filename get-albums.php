<?php
/* get database (richiedo il database)*/
// RICORDA CHE: con DIR mi riporta al file attuale
require_once __DIR__ . '/./partials/database.php';

/* filtraggio dati in base alle keyword query*/

/* GET ALBUMS*/
// filtro in base agli 'album' 
$artist = empty($_GET['artist']) ? false : $_GET['artist'];
$albums = [];

if($artist == false || $artist == 'all'){ // settando 'all' oppure  non metto nulla
    $albums = $database;                 //ottenendo tutto il databse
                            
}else{
    foreach($database as $cd){
        if(cd['author'] == $artist){
            $albums = $cd;  // stampa l'album corrisposto
        }
    }
}

/*GET ARTIST */
// filtro in base agli artisti

$artists = [];
foreach($database as $cd){
    if(! in_array($cd['author'], $artist) ){
        $artists[] = $cd['author'];
    }
}

// FINAL RESULTS
// stampa l'array finale contenente le chiavi 'albums' e 'artists'
$response = [
    'albums' => $albums,
    'artists' => $artists
];

// output
header('Content-type: application/json');
echo json_encode($response);