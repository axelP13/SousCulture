<!-- Bootstrap-->
<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="./css/templatemo-sixteen.css">
<link rel="stylesheet" href="./css/textarea.css">

<?php

$id = isset($_GET["id"]) ? $_GET["id"] : NULL; // Façon d'écrire if/else
$json = file_get_contents('./MesFilms.json'); // On fetch le résultat
$obj = json_decode($json); // on décode le json

// print_r($json);
// foreach ($obj as $show) {
foreach ($obj->shows as $show) {
    if($show->id == $id){
        echo('
            <div class="container-fluid h-100">
                </br>
            
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" src="'.$show->poster.'" alt="Image"></a>
                    </div>
                    <div class="col-2">
                        <div class="row h-100">
                                <h2>'.$show->title.'</h2>
                            <div>'.$show->description.'</div>
                        </div>
                    </div>
                    <div class="col-4">
                    </div>     
                </div></br>
                </br>
                <div class="row">
                    <div class="col mx-auto" style="text-align: center">
                        <h2>Ma critique</h2>
                    </div>
                </div></br>
                </br>
                <div class="row">
                    <div class="col mx-auto" style="text-align: center">
                    '.$show->critique.'
                    </div>
                </div>
                </br>
                </br>
                
                </form>
            </div>
        ');
    }
}


?>