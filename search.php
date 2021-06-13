<?php 
$id = isset($_POST["titre"]) ? $_POST["titre"] : NULL;
$json = file_get_contents('http://api.betaseries.com/search/shows?key=1d4db8125fb1&text='.$id.'');
$obj = json_decode($json, true);
var_dump($obj['shows']);
//http://api.betaseries.com/search/shows?text=the_queen%27s_gambit&key=1d4db8125fb1&fields=id
?>