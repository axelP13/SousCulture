<?php 
$texte = isset($_POST["titre"]) ? $_POST["titre"] : NULL; // Façon d'écrire if/else
$json = file_get_contents('http://api.betaseries.com/search/shows?key=1d4db8125fb1&text='.$texte.''); // On fetch le résultat
$obj = json_decode($json); // on décode le json

foreach ($obj->shows as $shows) {
    // echo("j'ai vu le shows : ".print_r($shows));
    foreach ($shows as $show){
        // echo ($obj[$shows][$show]["id"]);
        echo(print_r($show)."</br>");
    };
    
};
// for ($i = 1; $i <= 10; $i++) {
//     echo $obj["shows"]["0"]["id"];
// }

//http://api.betaseries.com/search/shows?text=the_queen%27s_gambit&key=1d4db8125fb1&fields=id
?>