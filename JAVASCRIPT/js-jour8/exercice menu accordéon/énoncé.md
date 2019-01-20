# EXERCICE
dossier menu-accordeon jquery
-> index.html
-> style.css
-> script.js


Générer un menu ACCORDEON questions-reponses
à partir d'une donnée de type "tableau d'objets"

# INDICATIONS
-> utiliser les méthodes jQuery de sélection, d'écouteurs d'Evt, et d'apparition/disparition (slideDown, dlideUp)

# HTML
-> La liste :une balise div.accordion-list qui contient tout
	-> des balises div.accordion-item
		-> à l'intérieur :
			-> une balise a.question-btn avec l'intitulé du texte de la question
			-> une balise p.answer qui contient le texte de la réponse
    

   
 <!-- EXEMPLE DE LA STRUCTURE A RESPECTER
  <div class="accordion-list">
  
      <div class="accordion-item">
        <a href="#" class="question btn">
          Question1<i class="fa fa-angle-right"></i>
        </a>
        <p class="answer">Réponse1</p>
      </div> 

      <div class="accordion-item">
        <a href="#" class="question btn">
          Question1<i class="fa fa-angle-right"></i>
        </a>
        <p class="answer">Réponse1</p>
      </div>
      
  </div>
  -->
  
#CSS

body {
  background: #566177;
  font-family: arial;
}
#accordion-list, h2 {
  width:700px;
  margin: 0 auto;
  margin:1em;
}
h2 {
  color: #fff;
}

#accordion-item {
  padding-bottom: 15px;
}
a.question {
  background: #fafafe;
  padding: 11px;
  padding-top: 15px;
  padding-bottom: 15px;
  display: block;
  border-bottom: 1px solid #e7e7e7;
  position:relative;
  text-decoration: none;
  color: #2a2a2e;
  transition: 0.2s;
}
a.question i {
  position:absolute;
  right:3%;
  transition: 0.3s;
}
a.active  {
  font-weight:bold;
  padding-left: 19px;
  color: #1f86d8;
}
a.active i  {
  transform: rotate(90deg);
  font-weight:bold;
  color: #1f86d8;
}
a.question:hover {
  background: #f5f6f7;
  cursor:pointer;
}
p.answer {
  padding: 15px;
  display: none;
  background: #fff;
  margin-top:0;
  color: #455;
}




# Ce qu'il faut faire :


1 Générer le HTML de la liste de questions/réponses en Jquery
2 Créer les interactions








<script>

// La donnée

var faqs = 
[
	{
    	question: 'Quels sont les modes de livraison proposés, et quels sont les tarifs ?', 
    	answer: '<strong>Livraison standard – 5,95 €</strong> : Votre colis vous sera livré dans les 2 à 4 jours ouvrés suivant la date de la commande (à l\'exclusion des week-ends) Par exemple, si vous passez commande le jeudi avant <span style="color:red;">13h CET</span> , votre commande sera livrée au plus tôt le lundi suivant.'
    },
    
	{
    	question: 'Est-ce que les commandes peuvent être livrées à mon adresse ?', 
    	answer: 'Oui. Le service Click&amp;Collect (livraison en magasin) est disponible dans tous les magasins français UNIQLO. Référez-vous à la signalétique en magasins pour trouver le comptoir de retrait Click&amp;Collect.'
    },
    
	{
    	question: 'Que se passe-t-il si je suis absent lors de la livraison ?', 
    	answer: 'Si vous (ou le destinataire du colis) êtes absent lors du passage de notre transporteur, un avis de passage sera déposé dans votre boîte aux lettres (lorsque cela sera possible), pour vous informer de la prochaine livraison, ou du lieu où votre colis a été déposé. Notez que si vous devez retirer votre colis dans un point de retrait / bureau de poste, il y sera disponible pendant 14 jours calendaires maximum. Passé ce délai, il nous sera renvoyé en vue d\'un remboursement.'
    },
    
	{
    	question: 'Par quel moyen je serais informé(e) de la disponibilité de ma commande ?', 
    	answer: 'Vous serez informé(e) de la disponibilité de votre commande par Email et par SMS.'
    },
    
  	{
      	question: 'Puis-je modifier la date de livraison ?', 
  		answer: 'Il n’est pas possible de modifier l’heure ou la date de la livraison Relais Colis.'
  	},
  
  	{
    	question: 'Comment puis-je renvoyer ma commande ?', 
        answer: 'Pour tout retour de commande, déposez simplement votre commande dans l’un des point-relais Relais Colis, en utilisant le bon de retour fourni, ou rendez-vous dans <a href="https://www.uniqlo.com/on/demandware.store/Sites-FR-Site/fr_FR/Link-Page?cid=Stores_Landing_Page">n\'importe quel magasin Uniqlo</a>.<br>Veuillez noter que les commandes réglées via PayPal ne pourront pas être remboursées en magasin.<br>Un récépissé vous sera alors délivré. Nous vous demandons de bien vouloir conserver ce document jusqu’à obtention de votre remboursement.<br>Veuillez noter que la levée des colis retournés est quotidienne.<br>Vous pouvez suivre l\'évolution de votre retour via le site de Relais Colis (<a href="https://www.relaiscolis.com/">www.relaiscolis.com</a>). Une fois indiqué comme réceptionné, comptez 3 à 4 jours ouvrés pour que votre colis soit réceptionné et traité par nos services.'
        },
];




