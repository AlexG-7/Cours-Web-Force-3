<?php
//php/boutique/fiche_produit.php
require_once('inc/init.inc.php');



// fiche_produit.php?id=toto (146857)
if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
	
	$resultat = $pdo -> prepare("SELECT * FROM produit WHERE id_produit = :id");
	$resultat -> bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$resultat -> execute();
	
	if($resultat -> rowCount() > 0){
		// Tout va bien, l'id correspond à un produit
		$produit = $resultat -> fetch();
		// $produit est un array avec toutes les infos du produit à afficher
		//debug($produit);
		extract($produit);
	}
	else{
		header('location:boutique.php');
	}
}
else{
	header('location:boutique.php');
}


// Ajouter le produit
if(isset($_POST['ajout_panier'])){
	// Si le formulaire d'ajout au panier est activé
	// On cible le name du btn submit afin de cibler CE formulaire-là et pas un autre. 
	
	$quantite = $_POST['quantite'];
	ajouterProduit($id_produit, $quantite, $photo, $titre, $prix);
	// Fonction qui va ajouter le produit au panier. Le panier est stocké en session
	header('location:fiche_produit.php?id=' . $id_produit);
}


// recupérer les suggestions de produit : 
$resultat = $pdo -> query("
SELECT * 
FROM produit 
WHERE categorie = '$categorie' 
AND id_produit != $id_produit 
ORDER BY prix LIMIT 0,3"
);


$suggestions = $resultat -> fetchAll();

$page = $titre;
require_once('inc/header.inc.php');
?>
<!-- HTML de la fiche produit -->

<h1>Fiche du produit <?= $titre ?></h1>

<div class="col-md-6 col-md-offset-3">
	<div class="panel-default border">
		<div class="panel-heading text-center"><h2><?= $titre ?></h2></div>
		<div class="panel-body">
			<img src="photo/<?= $photo ?>" alt="" class="img-responsive"><hr>
			<p class="text-center">Catégorie : <?= $categorie ?></p>
			<p class="text-center">Couleur : <?= $couleur ?></p>
			<p class="text-center">Taille : <?= $taille ?></p>
			<p class="text-center">Description :<?= $description ?></p>
			<p class="text-center">Prix : <?= number_format($prix, 2, ',', ' ') ?> €</p><hr>
			
		<?php if($stock > 0): ?>
		
		<em>Nombre de produit(s) disponible : <?= $stock ?></em><hr>
		<form method="post" action="">	
			<label for="quantite">Quantité</label>
			<select class="form-control" id="quantite" name="quantite">
				<?php for($i = 1; $i <= $stock && $i <= 5; $i++) : ?> 
					<option><?= $i ?></option>
				<?php endfor; ?>				
			</select><br>
			<input type="submit" name="ajout_panier" class="btn btn-primary col-md-12" value="ajout au panier">
		</form>
		
		<?php else: ?>	
		<div class="alert alert-danger text-center">Rupture de stock !!!</div>	
		<?php endif; ?>
		</div>
	</div>
</div>




<div class="row">
<?php foreach($suggestions as $sug) : ?>
<?php extract($sug) ?>
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




















<?php
require_once('inc/footer.inc.php');
?>