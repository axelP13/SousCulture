 <!-- Bootstrap-->
 <link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="./css/fontawesome.css">
<link rel="stylesheet" href="./css/templatemo-sixteen.css">
<link rel="stylesheet" href="./css/owl.css">

<?php 
$texte = isset($_POST["titre"]) ? $_POST["titre"] : NULL; // Façon d'écrire if/else
$json = file_get_contents('http://api.betaseries.com/search/shows?key=1d4db8125fb1&text='.$texte.''); // On fetch le résultat
$obj = json_decode($json); // on décode le json

foreach ($obj->shows as $show) {
    echo ' 
    <div class="row-md-2">
        <div class="col-md-2">
            <div class="product-item">
                <a href="#"><img src="'.$show->poster.'" alt="Image"></a>
                <div class="down-content">
                    <a href="#"><h4>'.$show->title.'</h4></a>
                </div>
            </div>
        </div>
    </div>';

    // echo("<button>".$show->title."</button>");
};
// for ($i = 1; $i <= 10; $i++) {
//     echo $obj["shows"]["0"]["id"];
// }

//http://api.betaseries.com/search/shows?text=the_queen%27s_gambit&key=1d4db8125fb1&fields=id
?>