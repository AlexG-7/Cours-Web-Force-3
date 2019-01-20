var faqs = [
  {
    question:
      "Quels sont les modes de livraison proposés, et quels sont les tarifs ?",
    answer:
      '<strong>Livraison standard – 5,95 €</strong> : Votre colis vous sera livré dans les 2 à 4 jours ouvrés suivant la date de la commande (à l\'exclusion des week-ends) Par exemple, si vous passez commande le jeudi avant <span style="color:red;">13h CET</span> , votre commande sera livrée au plus tôt le lundi suivant.'
  },

  {
    question: "Est-ce que les commandes peuvent être livrées à mon adresse ?",
    answer:
      "Oui. Le service Click&amp;Collect (livraison en magasin) est disponible dans tous les magasins français UNIQLO. Référez-vous à la signalétique en magasins pour trouver le comptoir de retrait Click&amp;Collect."
  },

  {
    question: "Que se passe-t-il si je suis absent lors de la livraison ?",
    answer:
      "Si vous (ou le destinataire du colis) êtes absent lors du passage de notre transporteur, un avis de passage sera déposé dans votre boîte aux lettres (lorsque cela sera possible), pour vous informer de la prochaine livraison, ou du lieu où votre colis a été déposé. Notez que si vous devez retirer votre colis dans un point de retrait / bureau de poste, il y sera disponible pendant 14 jours calendaires maximum. Passé ce délai, il nous sera renvoyé en vue d'un remboursement."
  },

  {
    question:
      "Par quel moyen je serais informé(e) de la disponibilité de ma commande ?",
    answer:
      "Vous serez informé(e) de la disponibilité de votre commande par Email et par SMS."
  },

  {
    question: "Puis-je modifier la date de livraison ?",
    answer:
      "Il n’est pas possible de modifier l’heure ou la date de la livraison Relais Colis."
  },

  {
    question: "Comment puis-je renvoyer ma commande ?",
    answer:
      'Pour tout retour de commande, déposez simplement votre commande dans l’un des point-relais Relais Colis, en utilisant le bon de retour fourni, ou rendez-vous dans <a href="https://www.uniqlo.com/on/demandware.store/Sites-FR-Site/fr_FR/Link-Page?cid=Stores_Landing_Page">n\'importe quel magasin Uniqlo</a>.<br>Veuillez noter que les commandes réglées via PayPal ne pourront pas être remboursées en magasin.<br>Un récépissé vous sera alors délivré. Nous vous demandons de bien vouloir conserver ce document jusqu’à obtention de votre remboursement.<br>Veuillez noter que la levée des colis retournés est quotidienne.<br>Vous pouvez suivre l\'évolution de votre retour via le site de Relais Colis (<a href="https://www.relaiscolis.com/">www.relaiscolis.com</a>). Une fois indiqué comme réceptionné, comptez 3 à 4 jours ouvrés pour que votre colis soit réceptionné et traité par nos services.'
  }
];

//EXEMPLE POUR INJECTER UN MORCEAU DE HTML DANS UNE BALISE SELECTIONNEE EN JQUERY
//Selection de la balise parent
var list = $(".accordion-list");

// // //En ES 5
// list.html(
//   "<div class='accordion-item'><a href='#' class='question btn'>" +
//     faqs[0].question +
//     "<i class='fa fa-angle-right'></i></a><p class='answer'>" +
//     faqs[0].answer +
//     "</p></div>"
// );

// EN ES6
// mettre des apostrophes alt gr 7 ``
// .html() // Remplace TOUT le contenu de la balise ciblée
// .append() // ajoute un template HTML en dernier enfant de la balise ciblée
// .prepend() // ajoute un template HTML en premier enfant de la balise ciblée

for (var index = 0; index < faqs.length; index++) {
  list.append(`
     <div class="accordion-item">
        <a href="#" class="question btn">
          ${faqs[index].question}<i class="fa fa-angle-right"></i>
        </a>
        <p class="answer">${faqs[index].answer}</p>
      </div>
  `);
}

function showOrHide(event) {
  event.preventDefault();

  $(".accordion-item a").removeClass("active");
  $(this).addClass("active");
    // console.log($(this))
    // console.log($(this).next());


    $("p").slideUp();
    $(this).next().slideToggle();

}


$("a").on("click", showOrHide);
