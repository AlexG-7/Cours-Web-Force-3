<?php

require_once("inc/init.inc.php");

// debug($_POST);
// debug($_FILES);


$resultat = $pdo->prepare('SELECT id_logement, titre, adresse, ville , cp, surface, prix, photo, type, description FROM logement');
$resultat->execute();
$logements = $resultat->fetchAll(PDO::FETCH_ASSOC);






?>



<!doctype html>
<html lang="fr">
  <head>
    <title>Affichage logement</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Feuille de style CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="col-md-8">Affichage Logement</h1>

      <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                    <th>Surface en m²</th>
                    <th>Prix en Euros</th>
                    <th>Photo</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php if(empty($logements)): // S'il n'y a pas de logment ?>
			<tr>
				<td colspan="4" class="alert alert-danger">Aucun logement disponible</td>
			</tr>
		<?php else: ?>
			<?php foreach($logements as $logement): ?>
				<tr>
					<td><?=$logement['titre'];?></td>
					<td><?=$logement['adresse'];?></td>
					<td><?=$logement['ville'];?></td>
                    <td><?=$logement['cp'];?></td>
                    <td><?=$logement['surface'];?></td>
                    <td><?=$logement['prix'];?></td>
                    <td><?=$logement['photo']?></td>
                    <td><?=$logement['type'];?></td>
                    <td><?= substr($logement['description'],0,250) . "...";?></td>
					<td>
						<a href="#<?=$logement['id_logement'];?>">Plus d'infos</a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
            </tbody>
        </table>


     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
