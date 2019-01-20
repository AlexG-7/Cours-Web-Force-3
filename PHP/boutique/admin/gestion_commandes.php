<?php
require_once("../inc/init.inc.php");
//--- VERIFICATION ADMIN ---//
if (!internauteEstConnecteEtEstAdmin()) {
    header("location:" . URL . "connexion.php");
}
//--- SUPPRESSION MEMBRES ---//
if (isset($_GET['action']) && $_GET['action'] == 'suppression') {
    $pdo->exec("DELETE FROM commande WHERE id_commande='$_GET[id_commande]'");
    $_GET['action'] = 'affichage';
    $content .= '<div class="col-md-8 col-md-offset-2 alert alert-success text-center">La commande n° ' .$_GET['id_commande'] .' a bien été supprimé!</div>';
}
//--- MODIFICATION ETAT ---//
if ($_POST) {
    if (isset($_GET['action']) && $_GET['action'] == 'affichage') {
        $resultat = $pdo->prepare("UPDATE commande SET etat = :etat WHERE id_commande = '$_POST[id_commande]'");

        $content .= '<div class="col-md-8 col-md-offset-2 alert alert-success text-center">L\'état de la commande n° ' . $_POST['id_commande'] . ' a bien été modifié ! </div>';

        $resultat->bindValue(':etat', $_POST['etat'], PDO::PARAM_STR);

        $resultat->execute();
    }
}
//---- LIENS COMMANDES ----//
$content .= '<div class="list-group col-md-6 col-md-offset-3">';
$content .= '<h3 class="list-group-item active text-center">BACK OFFICE</h3>';
$content .= '<a href="?action=affichage" class="list-group-item text-center">Affichage des commandes</a>';
//$content .= '<a href="?action=ajout" class="list-group-item text-center">Ajout d'un membre</a>';
$content .= '<hr></div>';
//--- AFFICHAGE DES COMMANDES ---//
if (isset($_GET['action']) && $_GET['action'] == 'affichage') {
    $resultat = $pdo->query("SELECT m.id_membre AS 'N° membre', m.email, m.prenom, m.nom, m.adresse, c.id_commande AS 'N° de commande', c.montant, c.etat FROM membre m, commande c WHERE c.id_membre = m.id_membre;");

    $content .= '<div class="col-md-12 text-center" style="margin-bottom: 10px;"><h3 class="alert alert-info">Liste des commandes</h3>';

    $content .= 'Nombre de commande(s) dans la boutique : <span class="badge" style="background: #dff0d8; color:#000;font-size: 15px;">' . $resultat->rowCount() . '</span></div>';

    $content .= '<br><table class="col-md-12 table text-center" style="margin-bottom: 40px;"><tr>';
    for ($i = 0; $i < $resultat->columnCount(); $i++) {
        $colonne = $resultat->getColumnMeta($i);
        $content .= '<th class="text-center">' . $colonne['name'] . '</th>';
    }
    $content .= '<th class="text-center">Détails</th>';
    $content .= '<th class="text-center">Suppression</th>';
    $content .= '<th class="text-center">Etat</th>';
    $content .= '<th class="text-center">Modification</th>';
    $content .= '</tr>';
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $content .= '<tr>';
        foreach ($ligne as $indice => $information) {
            if ($indice == 'montant') {
                $content .= '<td style="height: 20px;">' . $information . ' €</td>';
            } else {
                $content .= '<td style="height: 20px;">' . $information . '</td>';
            }
        }
        $content .= '<td><a href="?action=detail&id_commande=' . $ligne['N° de commande'] . '"><span class="glyphicon glyphicon-search"></span></a></td>';
        $content .= '<td><a href="?action=suppression&id_commande=' . $ligne['N° de commande'] . '"   OnClick="return(confirm(\'En êtes vous certain ?\'));"><span class="glyphicon glyphicon-trash"></span></a></td>';
        $etat = (isset($ligne['etat'])) ? $ligne['etat'] : '';
        $id_commande = (isset($ligne['N° de commande'])) ? $ligne['N° de commande'] : '';
        $content .= '<td><form method="post">
			<input type="hidden" id="id_commande" name="id_commande" value="' . $id_commande . '">
			<select class="form-control" name="etat">
			  <option value="en cours de traitement"';
        if ($etat == 'en cours de traitement') {
            $content .= 'selected';
        }
        $content .= '>En cours de traitement</option>
			  <option value="envoyé"';
        if ($etat == 'envoyé') {
            $content .= 'selected';
        }
        $content .= '>Envoyé</option>
			  <option value="livré"';
        if ($etat == 'livré') {
            $content .= 'selected';
        }
        $content .='>Livré</option>
		  </select></td>
		  <td><input type="submit" class="btn btn-primary" value="Modifier état">
			</form></td>';
        $content .= '</tr>';
    }
    $content .= '</table><br><br><br><br>';
}
//--- AFFICHAGE DETAILS COMMANDE ---//
require_once("../inc/haut.inc.php");
//debug($donnees);
echo $content;
if (isset($_GET['action']) && $_GET['action'] == 'detail') {
    if (isset($_GET['id_commande'])) {
        $resultat = $pdo->query("SELECT dc.id_details_commande, dc.id_produit, p.titre, p.categorie, p.photo, dc.quantite, dc.prix FROM details_commande dc, produit p WHERE dc.id_produit = p.id_produit AND dc.id_commande = '$_GET[id_commande]'");
    }


    echo '<div class="col-md-12 text-center" style="margin-bottom: 10px;"><h3 class="alert alert-info">Détail de la commande n° ' . $_GET['id_commande'] . '</h3>';

    echo 'Nombre de produits(s) dans la commande : <span class="badge" style="background: #dff0d8; color:#000;font-size: 15px;">' . $resultat->rowCount() . '</span></div>';

    echo '<br><table class="col-md-12 table text-center" style="margin-bottom: 40px;"><tr>';
    for ($i = 0; $i < $resultat->columnCount(); $i++) {
        $colonne = $resultat->getColumnMeta($i);
        echo '<th class="text-center">' . $colonne['name'] . '</th>';
    }
    echo '</tr>';
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        //debug($ligne);
        echo '<tr>';
        foreach ($ligne as $indice => $information) {
            if ($indice == 'photo') {
                echo '<td><img src="' . $information . '" width="70" height="70"></td>';
            }
            //$content .= '<td style="height: 20px;">' . $information . ' €</td>';
            else {
                echo '<td>' . $information . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table><br><br><br><br>';
}
require_once("../inc/bas.inc.php");
