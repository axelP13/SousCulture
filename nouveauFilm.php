<?php 
    //On récupère les données de l'url
    $id = isset($_GET["id"]) ? $_GET["id"] : NULL;
    $title = isset($_GET["title"]) ? $_GET["title"] : NULL;
    $description = isset($_GET["description"]) ? $_GET["description"] : NULL;
    $poster = isset($_GET["poster"]) ? $_GET["poster"] : NULL;
    $type = isset($_GET["type"]) ? $_GET["type"] : NULL;

    //On récupère les données du formulaire
    $critique = isset($_POST["critique"]) ? $_POST["critique"] : NULL;
    
    $data = file_get_contents('./MesFilms.json');
    $data_array = json_decode($data, true);
    //data in our POST
    $input = array(
        'id' => $id,
        'type' => $type,
        'title' => $title,
        'description' => $description,
        'poster' => $poster,
        'critique' => $critique
        
    );
    //append the POST data
    array_push($data_array["shows"] , $input);
    //return to json and put contents to our file
    $data_array = json_encode($data_array, JSON_PRETTY_PRINT);
    file_put_contents('./MesFilms.json', $data_array);

    echo("done. </br>");
    echo('id='.$id.'</br>type='.$type.'</br> title='.$title.'</br>description='.$description.'</br>poster='.$poster.'</br>critique='.$critique)


?>