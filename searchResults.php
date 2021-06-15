 <!-- Bootstrap-->
 <link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="./css/templatemo-sixteen.css">

<?php 
$type = $_POST["radio"];
if($type == "show") {

$texte = isset($_POST["titre"]) ? $_POST["titre"] : NULL; // Façon d'écrire if/else
$json = file_get_contents('http://api.betaseries.com/search/shows?key=1d4db8125fb1&text='.$texte.''); // On fetch le résultat
$obj = json_decode($json); // on décode le json

    echo '<div class="container">
            <div class="row">';
    foreach ($obj->shows as $show) {
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

else {
$texte = isset($_POST["titre"]) ? $_POST["titre"] : NULL;
$json = file_get_contents('http://api.betaseries.com/search/movies?key=1d4db8125fb1&text='.$texte.'');
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