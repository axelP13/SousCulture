 <!-- Bootstrap-->
 <link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="./css/templatemo-sixteen.css">

<?php 
$type = $_POST["radio"]; // On récupère la valeur de "radio" envoyée grâce au formulaire de admin.html
if($type == "show") { 

$texte = isset($_POST["titre"]) ? $_POST["titre"] : NULL; // Façon d'écrire if/else, vérifie la présence de titre dans les données POST
$json = file_get_contents('http://api.betaseries.com/search/shows?key=1d4db8125fb1&text='.$texte.''); // On fetch le résultat de la requête 
$obj = json_decode($json); // on décode le json en objet

    echo '<div class="container">
            <div class="row">';
    foreach ($obj->shows as $show) { // Pour chaque élement de obj.shows que l'on nomme $show
        //Echo affiche du html et les '.' servent à concaténer les variables avec le texte.
        echo ' 
            <div class="col-md-2">
                <div class="product-item">
                    <a href="./detail.php?id='.$show->id.'&type='.$type.'"><img src="'.$show->poster.'" alt="Image"></a>
                    <div class="down-content">
                        <a href="./detail.php?id='.$show->id.'&type='.$type.'"><h4>'.$show->title.'</h4></a>
                    </div>
                </div>
            </div>
        ';
    };
}

else { //Si le titre n'est pas un show 

$texte = isset($_POST["titre"]) ? $_POST["titre"] : NULL;
$json = file_get_contents('http://api.betaseries.com/search/movies?key=1d4db8125fb1&text='.$texte.''); // Même requête avec movies
$obj = json_decode($json); // on décode le json

    echo '<div class="container">
            <div class="row">';
    foreach ($obj->movies as $movie) {
        echo ' 
            <div class="col-md-2">
                <div class="product-item">
                    <a href="./detail.php?id='.$movie->id.'&type='.$type.'"><img src="'.$movie->poster.'" alt="Image"></a>
                    <div class="down-content">
                        <a href="./detail.php?id='.$movie->id.'&type='.$type.'"><h4>'.$movie->title.'</h4></a>
                    </div>
                </div>
            </div>
        ';
    };
}

echo '  </div>
    </div>';
?>