<!-- Bootstrap-->
<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="./css/templatemo-sixteen.css">


<?php

$id = isset($_GET["id"]) ? $_GET["id"] : NULL; // Façon d'écrire if/else
$json = file_get_contents('http://api.betaseries.com/shows/display?key=1d4db8125fb1&id='.$id); // On fetch le résultat
$obj = json_decode($json); // on décode le json

// print_r($json);
// foreach ($obj as $show) {

echo('
    <div class="container">
        <a href="./detail.php?id='.$obj->show->id.'"><img src="'.$obj->show->images->poster.'" alt="Image"></a>
        <div class="down-content">
            <a href="./detail.php?id='.$obj->show->id.'"><h4>'.$obj->show->title.'</h4></a>
        </div>
        <div>'.$obj->show->description.'</div>
    </div>
    </div>');

// }


?>