<?php 

$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');

$resultat = $pdo -> query("SELECT * FROM employes");
// $resultat ----> PDOStatement ---> inexploitable


$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	</head>
	<body>
		<div id="container" style="width: 90%; margin: 5vh auto">
			<div class="row">
				
				<?php foreach($employes as $emp) : ?>
				<?php extract($emp);?>
					
				<!-- debut vignette produit -->
				<div class="col-sm-6 col-lg-3 col-md-4">
					<div class="thumbnail">
						<img src="image1.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right"><?= $id_employes ?></h4>
						<h4><a href="fiche_employe.php?id=<?= $id_employes ?>"><?= $nom ?> <?= $prenom ?></a>
							</h4>
							<ul>	
								<li>Prenom : <?= $prenom ?></li>
								<li>salaire : <?= $salaire ?></li>
								<li>Date embauche : <?= $date_embauche ?></li>
							</ul>
						</div>
						<div class="ratings">
							<p class="pull-right">15 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</p>
						</div>
					</div>
				</div>	
				<!-- fin vignette produit -->
				
				<?php endforeach; ?>
				
				
				
				
				
				
				
			</div>
		</div>
	</body>
</html>