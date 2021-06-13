<?php 
$id = $_POST["id"];

$json = file_get_contents('url_here');
$obj = json_decode($json);
echo $obj->access_token;
// http://api.betaseries.com/search/shows?text=the_queen%27s_gambit&key=1d4db8125fb1&fields=id
?>7