<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Liste de recettes</title>

    <!-- Bootstrap core CSS -->
    <?php include '../navbar.php';?>

    <!-- Custom styles for this template -->
    <link href="/css/liste.css" rel="stylesheet">
  </head>

  <body>
    <header>
      
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-1 col-lg-1 d-none d-sm-block bg-light sidebar">
          
        </div>

        <main role="main" class="col-sm-6 ml-sm-auto col-lg-11 col-md-10 pt-3">
          <h1>Liste des recettes</h1>

          

          
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Auteur</th>
                  <th>Difficulté</th>
                  <th>Détails</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    while($uneRecette=$lesRecettes->fetch(PDO::FETCH_OBJ))
                    {
                        echo "<tr>
                            <td>".$uneRecette->lib."</td>
                            <td>".$uneRecette->utilprenom." ".$uneRecette->utilNom."</td>
                            <td>".$uneRecette->difficulte."</td>
                            <td><a href=\"/Controleur/ctrl_detail_recette.php/?idRecette=".$uneRecette->idRec."\" class=\"btn btn-primary\" role=\"button\">Détails</a></td>
                        </tr>";

                    }
                ?>
              </tbody>
            </table>
          </div>
        </main>
          <div class="col-sm-3 col-md-1 col-lg-1 d-none d-sm-block bg-light rightsidebar">
          
        </div>
      </div>
    </div>

    
  </body>
</html>
