<?php 
$id = $_POST["id"];

$json = file_get_contents('http://api.betaseries.com/search/shows?text='.$id.'&key=1d4db8125fb1&fields=id');
$obj = json_decode($json);
echo $obj->id;
// http://api.betaseries.com/search/shows?text=the_queen%27s_gambit&key=1d4db8125fb1&fields=id
?>7