<?php
//php/boutique/profil.php
require_once('inc/init.inc.php');

// Est-ce user est connecté sinon... redirection !! 
if(!userConnecte()){ // Si c'est false
	header('location:connexion.php');
}


//debug($_SESSION);

extract($_SESSION['membre']);



$page = 'Profil';
require_once('inc/header.inc.php');
?>
<div class="row">
	<h1>Profil de <?= $pseudo ?></h1>
	<div class="col-md-6 col-xs-12">
		<h2>Infos De profil</h2>
		<ul>
			<li>Prénom : <b><?= $prenom ?></b></li>
			<li>Nom : <b><?= $nom ?></b></li>
			<li>Civilite : <b><?= ($civilite == 'm') ? 'Homme' : 'Femme' ?></b></li>
			<li>Email : <b><?= $email ?></b></li>
			<li>Statut : <b><?= ($statut == '0') ? 'Client' : 'Admin' ?></b></li>
		</ul>
	</div>
	<div class="col-md-6 col-xs-12">
		<h2>Adresse de livraison</h2>
		<p>
		<b><?= $nom ?> <?= $prenom ?></b><br/>
		<?= $adresse ?><br/>
		<?= $code_postal ?> <?= $ville ?>
		</p>
	</div>
</div>
<div class="row">
	<h2>Historique des commandes</h2>
	<table class="table table-fluid table-dark">
		<tr>	
			<th>Commande N°</th>
			<th>Montant</th>
			<th>Date</th>
			<th>Statut</th>
		</tr>
		<tr>
			<td>1</td>
			<td>150€</td>
			<td>01/01/2019</td>
			<td>En cours</td>
		</tr>
		<tr>
			<td>1</td>
			<td>150€</td>
			<td>01/01/2019</td>
			<td>En cours</td>
		</tr>
		<tr>
			<td>1</td>
			<td>150€</td>
			<td>01/01/2019</td>
			<td>En cours</td>
		</tr>
		<tr>
			<td>1</td>
			<td>150€</td>
			<td>01/01/2019</td>
			<td>En cours</td>
		</tr>
	</table>
</div>


<?php
require_once('inc/footer.inc.php');
?>
