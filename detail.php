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
        </br>
    
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-2">
                <a href="./detail.php?id='.$obj->show->id.'"><img class="img-fluid" src="'.$obj->show->images->poster.'" alt="Image"></a>
            </div>
            <div class="col-2">
                <div class="row h-100">
                    <a class ="my-auto mx-auto" href="./detail.php?id='.$obj->show->id.'">
                        <h2>'.$obj->show->title.'</h2>
                    </a>
                    <div>'.$obj->show->description.'</div>
                </div>
            </div>
            <div class="col-4">
            </div>     
        </div>
        </br>
        </br>
        <form name="form" method="POST" action="./nouveauFilm.php">
            <div class="row">
                <div class="col min-height: 100%">
                    <textarea class="md-textarea form-control" spellcheck="true" name="texte" placeholder="Critique du film" rows="5"></textarea>
                </div>
            </div>
            </br>
            </br>
            <div class="row d-flex flex-wrap align-items-center bg-info">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"> Envoyer la critique </button>
            </div>
        </form>
    </div>
');

// }


?>