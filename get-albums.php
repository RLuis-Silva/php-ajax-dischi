<?php
// get database (richiedo il database)
require_once __DIR__ . '/./partials/database.php';
// RICORDA CHE: con DIR mi riporta al file attuale

// output
header('Content-type: application/json');
echo json_encode($database);