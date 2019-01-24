<?php
//php/boutique/profil.php
require_once('inc/init.inc.php');

// Est-ce user est connecté sinon... redirection !! 
if(!userConnecte()){ // Si c'est false
	header('location:connexion.php');
}

$id_membre = $_SESSION['membre']['id_membre'];

// debug($id_membre);

$query = <<<EOS
SELECT
    c.*, concat_ws(' ', m.prenom, m.nom) AS membre
FROM
    commande c
JOIN membre m ON c.id_membre = m.id_membre
WHERE c.id_membre = :id_membre
ORDER BY date_enregistrement DESC
EOS;
$resultat = $pdo -> prepare($query);
$resultat -> bindParam(':id_membre', $id_membre);
$resultat->execute();
$commandes = $resultat -> fetchAll(PDO::FETCH_ASSOC);

// debug($commandes);

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

		<?php foreach($commandes as $commande) :
			$date = date_create($commande['date_enregistrement']);
			$montant = number_format($commande['montant'], 2, ',', ' ');
		?>
			<tr>
				<td><?= $commande['id_commande'] ?></td>
				<td><?= $montant ?> €</td>
				<td><?= date_format($date, 'd/m/Y H:i:s') ?></td>
				<td><?= ucfirst($commande['etat']) ?></td>
			</tr>
    	<?php endforeach?>
	</table>
</div>


<?php
require_once('inc/footer.inc.php');
?>
