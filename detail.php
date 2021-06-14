<!-- Bootstrap-->
<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="./css/templatemo-sixteen.css">
<link rel="stylesheet" href="./css/textarea.css">

<?php

$id = isset($_GET["id"]) ? $_GET["id"] : NULL; // Façon d'écrire if/else
$json = file_get_contents('http://api.betaseries.com/shows/display?key=1d4db8125fb1&id='.$id); // On fetch le résultat
$obj = json_decode($json); // on décode le json

// print_r($json);
// foreach ($obj as $show) {

echo('
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-3">
                <a href="./detail.php?id='.$obj->show->id.'"><img class="img-fluid" src="'.$obj->show->images->poster.'" alt="Image"></a>
            </div>
            <div class="col-3">
                <div class="row h-100">
                    <a class ="my-auto mx-auto" href="./detail.php?id='.$obj->show->id.'">
                        <h2>'.$obj->show->title.'</h2>
                    </a>
                    <div>'.$obj->show->description.'</div>
                </div>
            </div>
            <div class="col-3">
            </div>     
        </div>
       </br>
        <div class="row">
            <div class="col min-height: 100%">
                <textarea class="md-textarea form-control" spellcheck="true" name="texte" placeholder="Description du site" rows="5"></textarea>
            </div>
        </div>
    </div>
');

// }


?>