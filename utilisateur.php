<!DOCTYPE html> 
<header class="">
  <meta charset="utf-8">
  <title> sous culture </title>

  <!-- lien bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> 

  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/templatemo-sixteen.css">

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand"><h2>Sous <em>Culture</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>

<body>
  <?php

    $json = file_get_contents("./MesFilms.json");
    $obj = json_decode($json); // on décode le json
    
    echo '
    </br></br></br></br>
    <div class="container">
    <div class="row">';
    foreach ($obj->shows as $show) {
      echo ' 
          <div class="col-md-2">
              <div class="product-item">
                  <a href="./detailUtilisateur.php?id='.$show->id.'"><img src="'.$show->poster.'" alt="Image"></a>
                  <div class="down-content">
                      <a href="./detailUtilisateur.php?id='.$show->id.'"><h4>'.$show->title.'</h4></a>
                  </div>
              </div>
          </div>
      ';
  };
  echo '  </div>
    </div>';
?>
</body>
