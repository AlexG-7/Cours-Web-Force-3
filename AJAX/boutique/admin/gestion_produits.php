<?php
//php/boutique/admin/gestion_produits.php

require_once('../inc/init.inc.php');


// if(isset($_GET['validation']) && $_GET['validation'] == 'success'){
	// $error .= '<div class="alert alert-success">Félicitations l\'opération est un succès</div>';
// }

if(isset($_SESSION['success'])){
	$error .= $_SESSION['success'];
	unset($_SESSION['success']);
	
	// Grâce à la session on peut récupérer ici un message généré dans le fichier formulaire_produit.php
}

require_once('../inc/header.inc.php');


$resultat = $pdo -> query("SELECT * FROM produit");
$produits = $resultat -> fetchAll(PDO::FETCH_ASSOC);

$html .= '<table class="table table-dark table-fluid">'; 
$html .= '<tr>';
for($i = 0; $i < $resultat -> columnCount(); $i ++){ 
	$champs = $resultat -> getColumnMeta($i);
	$html .= '<th>' . $champs['name'] . '</th>'; 
}
$html .= '<th colspan="3">Action</th>';
$html .= '</tr>';

foreach($produits as $value){
	$html .= '<tr>'; 
	foreach($value as $indice => $info){
		
		if($indice == 'photo'){
			$html .= '<td><img src="' . RACINE_SITE . 'photo/' . $info . '" height="50px"/></td>';
		}
		else{
			$html .= '<td>' . $info . '</td>';
		}
	}
	$html .= '<td><a class="sup" href="' . RACINE_SITE . 'admin/suppression_produit.php?id=' . $value['id_produit'] . '"><i class="far fa-trash-alt"></i></a></td>';
	$html .= '<td><a href="' . RACINE_SITE . 'admin/formulaire_produit.php?id=' . $value['id_produit'] . '"><i class="far fa-edit"></i></a></td>';
	$html .= '<td><a href="' . RACINE_SITE . 'fiche_produit.php?id=' . $value['id_produit'] . '" target="_blank"><i class="far fa-eye"></i></a></td>';
	$html .= '</tr>'; 
}
$html .= '</table>'; 


?>
<h1>Gestion des produits</h1>

<?= $error ?>

<a href="<?= RACINE_SITE ?>admin/formulaire_produit.php" class="btn btn-primary">Ajouter un produit</a><br/><br/>

<?= $html ?>



<?php
require_once('../inc/footer.inc.php');
?>

<script type="text/javascript">
	$(function(){
		$(".sup").click(function(){
			return confirm('Voulez-vous supprimer le produit ?');
		});
	});
</script>