Exercice Formulaire
dossier exercice-formulaire-jquery
		> index.html
        > style.css
        > script.js

#HTML
Créer un formulaire qui contient 
-> input (placeholder "Votre prenom", name "firstname")
-> input (placeholder "Votre email", name "email")
-> select (name "category"
		option "Entrepreneur"
        option "Salarié"
        option "Etudiant"
-> textarea (placeholder "Saisissez un message", name "message")
-> des balises <label> qui reprennent le même intitulé que les placeholders

-> Un bouton qui permet d'envoyer le formulaire (attention à l'attribut "type")

** chacun des élement de formulaire sera suivi d'une balise p.error
** dans laquelle on pourra injecter un texte d'erreur plus tard grace à JS

#CSS
le formulaire fait 500px de large et est centré
Les labels ont la couleur blue
la class error a la couleur red

#Interaction
A la soumission du formulaire :
-> Si il y a des erreurs on doit les afficher sous chaque champs
-> Si il n'y a pas d'erreur on affiche un message de succès et on cache le formulaire


Détail des erreurs à traiter :
- le prénom doit comporter entre 2 et 30 caractères
- le select doit comporter un choix
- le message doit être compris entre 10 et 100 caractères

- le select doit comporter un choix 
-> texte à afficher: "Veuillez choisir une catégorie"

- le message doit être compris entre 10 et 100 caractères ET il ne doit pas être vide
-> Le texte à afficher: "Le message doit comporter entre 2 et 10 caractères"
-> Le texte à afficher si le message est vide : "Veuillez saisir un message"



#CSS
body {
	font-size: 16px;
	font-family: arial;
}
form {
	width: 500px;
	margin: 0 auto;
}
.error {
	color: red;
}
label {
	color:blue;
	display:block;
}
input, select, textarea {
	width: 100%;
	border-radius:5px;
	padding: 3px;
	border: 1px solid #ccc;
}
button {
	width:100%;
	background: #18a5ea;
	color:#fff;
	padding: 5px;
	border: 1px solid #18a5ea;
	border-radius: 5px;
}


