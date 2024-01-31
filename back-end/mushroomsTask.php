<?php

header("Content-Type: application/json");
// header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin:*");

$mushroomTasks = [
    [
        'task' => 'Identificare i funghi nel bosco',
        'priority' => 'Alta',
    ],
    [
        'task' => 'Raccogliere funghi commestibili',
        'priority' => 'Media',
    ],
    [
        'task' => 'Studiare le condizioni climatiche ideali per la raccolta',
        'priority' => 'Alta',
    ],
    [
        'task' => 'Esaminare la guida sui funghi locali',
        'priority' => 'Media',
    ],
    [
        'task' => 'Preparare una deliziosa ricetta con i funghi raccolti',
        'priority' => 'Bassa',
    ],
];

$jsonMushroomTasks = json_encode($mushroomTasks);
// file_put_contents("mushroomsTask.json", $jsonMushroomTasks);
echo $jsonMushroomTasks;