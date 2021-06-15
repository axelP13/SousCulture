<?php 
    //On récupère les données de l'url
    $id = isset($_GET["id"]) ? $_GET["id"] : NULL;
    $title = isset($_GET["title"]) ? $_GET["title"] : NULL;
    $description = isset($_GET["description"]) ? $_GET["description"] : NULL;
    $poster = isset($_GET["poster"]) ? $_GET["poster"] : NULL;
    $type = isset($_GET["type"]) ? $_GET["type"] : NULL;

    //On récupère les données du formulaire
    $critique = isset($_POST["critique"]) ? $_POST["critique"] : NULL;
    

    $data = file_get_contents('./MesFilms.json'); //On récupère le contenu de notre fichier JSON
    $data_array = json_decode($data, true); // on décode le JSON , true pour format Array
                        
    $input = array(     //On crée un tableau avec des clés et valeurs récupérées via le POST plus tôt
        'id' => $id,
        'type' => $type,
        'title' => $title,
        'description' => $description,
        'poster' => $poster,
        'critique' => $critique
        
    );
    
    array_push($data_array["shows"] , $input); // On push le nouveau tableau dans la partie shows de notre tableau (json décodé)

    $data_array = json_encode($data_array, JSON_PRETTY_PRINT); //On réencode le json et on le rend lisible (param 2)
    file_put_contents('./MesFilms.json', $data_array); // On remplace ./mesFilms.json par le nouveau json ($data_array)


    echo("done. </br>"); // Message sommaire de réussite.
    echo('id='.$id.'</br>type='.$type.'</br>title='.$title.'</br>description='.$description.'</br>poster='.$poster.'</br>critique='.$critique)


?>