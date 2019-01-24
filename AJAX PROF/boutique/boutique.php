<?php
// php/boutique/boutique.php

require_once('inc/init.inc.php');




// 1 : Recupérer tous les produits 

if(isset($_GET['categorie']) && !empty($_GET['categorie'])){
	
	$resultat = $pdo -> prepare("SELECT * FROM produit WHERE categorie = :cat");
	$resultat -> bindParam(':cat', $_GET['categorie'], PDO::PARAM_STR);
	$resultat -> execute(); 
	
	if($resultat -> rowCount() == 0){
		$resultat = $pdo -> query("SELECT * FROM produit");
		// header('location:boutique.php');	
	}
}
else{

	$resultat = $pdo -> query("SELECT * FROM produit");
	// $resultat ---> OBJ PDOStatement ---> INEXPLOITABLE
	// ---> FETCH ----> Plusieurs résultats --> FETCHALL
}

$produits = $resultat -> fetchAll();
// $produits est un array multi avec tous les produits









// 2 : Récupérer toutes les catégories
$resultat = $pdo -> query("SELECT DISTINCT categorie FROM produit");
// $resultat ---> OBJ PDOStatement ---> INEXPLOITABLE
// ---> FETCH ----> Plusieurs résultats --> FETCHALL
$categories = $resultat -> fetchAll();
// $categories est un array multi avec toutes les categories

// debug($produits);
// debug($categories);




// 3 : Afficher produits et catégorie via des boucles



$page = 'Boutique';
require_once('inc/header.inc.php');
?>

<div class="row row-offcanvas row-offcanvas-right">
		  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
			<div class="list-group">
			
			<p class="list-group-item active text-center">CATEGORIES</p>
	

				<a href="boutique.php" class="list-group-item">Tous</a>
				
				
		<?php foreach($categories as $cat) : ?>
		<a href="?categorie=<?= $cat['categorie'] ?>" class="list-group-item"><?= ucfirst($cat['categorie']) ?></a>
		
		<!-- ucfirst() 	  : première lettre en MAJUSCULE -->
		<!-- strtolower() : tout en minuscule -->
		<!-- strtoupper() : tout en MAJUSCULE -->
		<?php endforeach;  ?>

			
			</div>
		  </div>
		  <!--/.sidebar-offcanvas-->
		  <div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
			  <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
			</p>
			<div class="jumbotron">
			  <h1>Ma boutique</h1>
			</div>
			
			
			
			
			
			
			
<?php foreach($produits as $pdt) : ?>
<?php extract($pdt) ?>
<!-- col-xs-6 col-lg-4 -->
  <div class="col-xs-6 col-lg-4" style="margin-top: 10px;">
	  <div class="panel-default border">
		<div class="panel-heading text-center"><h2><?= $titre ?></h2></div>
		
		<p><a href="fiche_produit.php?id=<?= $id_produit ?>">
		
		<img src="photo/<?= $photo ?>" alt="" class="img-responsive">
		
		</a></p>
		<p class="text-center"><?= number_format($prix, 2, ',', ' ') ?>€</p>
		<p class="text-center"><a class="btn btn-primary" href="fiche_produit.php?id=<?= $id_produit ?>" role="button">Voir le détails &raquo;</a></p>
	  </div> 	
  </div>
<!-- end  col-xs-6 col-lg-4 -->
<?php endforeach; ?>
		
			
			
		  </div>
		  <!--/.col-xs-12.col-sm-9-->
		</div>
		<!--/row-->











<?php
require_once('inc/footer.inc.php');
?>