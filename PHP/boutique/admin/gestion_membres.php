<?php
require_once("../inc/init.inc.php");
//--- VERIFICATION ADMIN ---//
if (!internauteEstConnecteEtEstAdmin()) {
    header("location:" . URL . "connexion.php");
}
//--- SUPPRESSION MEMBRES ---//
if (isset($_GET['action']) && $_GET['action'] == 'suppression') {
    $resultat = $pdo->query("SELECT * FROM commande WHERE id_membre = '$_GET[id_membre]'");

    if ($resultat->rowCount() > 0) {
        $content .= '<div class="col-md-8 col-md-offset-2 alert alert-danger text-center">Impossible de supprimer le membre n° ' .$_GET['id_membre'] .' , des commandes en traitement lui sont associés!</div>';

        $_GET['action'] = 'affichage';
    } else {
        $pdo->exec("DELETE FROM membre WHERE id_membre='$_GET[id_membre]'");
        $_GET['action'] = 'affichage';
        $content .= '<div class="col-md-8 col-md-offset-2 alert alert-success text-center">Le membre n° ' .$_GET['id_membre'] .' a bien été supprimé!</div>';
    }
}
//--- MODIFICATION MEMBRE ---//
if (!empty($_POST)) {
    if (isset($_GET['action']) && $_GET['action'] == 'modification') {
        $resultat = $pdo->prepare("UPDATE membre SET pseudo = :pseudo, nom = :nom, prenom = :prenom, email = :email, civilite = :civilite, ville = :ville, code_postal = :code_postal, adresse = :adresse, statut = :statut WHERE id_membre = '$_POST[id_membre]'");

        $content .= '<div class="col-md-8 col-md-offset-2 alert alert-success text-center">Le membre n° ' . $_GET['id_membre'] . ' a bien été modifié ! </div>';
    }
    $resultat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $resultat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $resultat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $resultat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $resultat->bindValue(':civilite', $_POST['civilite'], PDO::PARAM_STR);
    $resultat->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
    $resultat->bindValue(':code_postal', $_POST['code_postal'], PDO::PARAM_INT);
    $resultat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
    $resultat->bindValue(':statut', $_POST['statut'], PDO::PARAM_INT);

    $resultat->execute();
}
//---- LIENS MEMBRES ----//
$content .= '<div class="list-group col-md-6 col-md-offset-3">';
$content .= '<h3 class="list-group-item active text-center">BACK OFFICE</h3>';
$content .= '<a href="?action=affichage" class="list-group-item text-center">Affichage des membres</a>';
//$content .= '<a href="?action=ajout" class="list-group-item text-center">Ajout d'un membre</a>';
$content .= '<hr></div>';
//--- AFFICHAGE DES MEMBRES ---//
if (isset($_GET['action']) && $_GET['action'] == 'affichage') {
    $resultat = $pdo->query("SELECT * FROM membre");

    $content .= '<div class="col-md-10 col-md-offset-1 text-center" style="margin-bottom: 10px;"><h3 class="alert alert-info">Liste des membres</h3>';

    $content .= 'Nombre de membre(s) dans la boutique : <span class="badge" style="background: #dff0d8; color:#000;font-size: 15px;">' . $resultat->rowCount() . '</span></div>';

    $content .= '<table class="table text-center"><tr>';
    for ($i = 0; $i < $resultat->columnCount(); $i++) {
        $colonne = $resultat->getColumnMeta($i);
        $content .= '<th class="text-center">' . $colonne['name'] . '</th>';
    }
    $content .= '<th class="text-center">Modification</th>';
    $content .= '<th class="text-center">Suppression</th>';
    $content .= '</tr>';
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $content .= '<tr>';
        foreach ($ligne as $indice => $information) {
            $content .= '<td style="height: 20px;">' . $information . '</td>';
        }
        $content .= '<td><a href="?action=modification&id_membre= ' . $ligne['id_membre'] . '"><span class="glyphicon glyphicon-wrench"></span></a></td>';
        $content .= '<td><a href="?action=suppression&id_membre= ' . $ligne['id_membre'] . '"   OnClick="return(confirm(\'En êtes vous certain ?\'));"><span class="glyphicon glyphicon-trash"></span></a></td>';
        $content .= '</tr>';
    }
    $content .= '</table><br><br><br><br>';
}
require_once("../inc/haut.inc.php");
echo $content;
//debug($_POST);
if (isset($_GET['action']) && $_GET['action'] == 'modification') {
    if (isset($_GET['id_membre'])) {
        $resultat = $pdo->query("SELECT * FROM membre WHERE id_membre = '$_GET[id_membre]'");
        $membre_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
        //debug($produit_actuel);
    }
    $id_membre = (isset($membre_actuel['id_membre'])) ? $membre_actuel['id_membre'] : '';
    $pseudo = (isset($membre_actuel['pseudo'])) ? $membre_actuel['pseudo'] : '';
    //$mdp = (isset($membre_actuel['mdp'])) ? $membre_actuel['mdp'] : '';
    $nom = (isset($membre_actuel['nom'])) ? $membre_actuel['nom'] : '';
    $prenom = (isset($membre_actuel['prenom'])) ? $membre_actuel['prenom'] : '';
    $email = (isset($membre_actuel['email'])) ? $membre_actuel['email'] : '';
    $civilite = (isset($membre_actuel['civilite'])) ? $membre_actuel['civilite'] : '';
    $ville = (isset($membre_actuel['ville'])) ? $membre_actuel['ville'] : '';
    $code_postal = (isset($membre_actuel['code_postal'])) ? $membre_actuel['code_postal'] : '';
    $adresse = (isset($membre_actuel['adresse'])) ? $membre_actuel['adresse'] : '';
    $statut = (isset($membre_actuel['statut'])) ? $membre_actuel['statut'] : '';

    echo '<form method="post" enctype="multipart/form-data" action="" class="col-md-8 col-md-offset-2">
		<h3 class="alert alert-info text-center">';
    echo ucfirst($_GET['action']) . ' du membre n° ' . $_GET['id_membre'] . '</h3>
			<input type="hidden" id="id_membre" name="id_membre" value="' . $id_membre . '">

		  <div class="form-group">
			<label for="pseudo">Pseudo</label>
			<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo" value="' . $pseudo .'">


		  </div>
		  <div class="form-group">
			<label for="nom">Nom</label>
			<input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="' . $nom . '">
		  </div>
		  <div class="form-group">
			<label for="prenom">Prénom</label>
			<input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" value="' . $prenom . '">
		  </div>
		  <div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" id="email" name="email" placeholder="email" value="' . $email . '">
		  </div>
		  <label for="civilite">Civilité</label>
		  <select class="form-control" name="civilite">
			  <option value="m"';
    if ($civilite == 'm') {
        echo 'selected';
    }
    echo'>Homme</option>
			  <option value="f"';
    if ($civilite == 'f') {
        echo 'selected';
    }
    echo'>Femme</option>
		  </select><br>
		  <div class="form-group">
			<label for="ville">Ville</label>
			<input type="text" class="form-control" id="ville"  name="ville" placeholder="ville" value="' . $ville . '">
		  </div>
		  <div class="form-group"><br>
			<label for="code_postal">Code Postal</label>
			<input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="code_postal" value="' . $code_postal . '">
		  </div>
		  <div class="form-group"><br>
			<label for="adresse">Adresse</label>
			<textarea class="form-control" id="adresse" name="adresse" rows="3">' . $adresse . '</textarea>
		  </div>
		  <label for="statut">Statut</label>
		  <select class="form-control" name="statut">
			  <option value="0"';
    if ($statut == '0') {
        echo 'selected';
    }
    echo'>Membre</option>
			  <option value="1"';
    if ($statut == '1') {
        echo 'selected';
    }
    echo'>Administrateur</option>
		  </select><br>


		  <input type="submit" class="col-md-12 btn btn-primary" value="';
    echo ucfirst($_GET['action']) . ' du membre"><br><br><br>
	</form>';
}
require_once("../inc/bas.inc.php");
