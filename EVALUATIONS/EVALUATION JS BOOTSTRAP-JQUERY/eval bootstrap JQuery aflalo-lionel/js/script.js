// Je déclare mes variables
var categorySelect = $("select[name=category]");
var messageTextArea = $("textarea[name=message]");
var success = $(".success");
var form = $("form");

// fonction pour envoyer le formulaire
function onSubmitForm(event) {
  event.preventDefault();
  var nombreError = 0;

  //   console.log($(this));
  //   console.log(event);

  $("p.error").text("");

  if (categorySelect.val() == 0) {
    categorySelect.next().text("Veuillez choisir un chat à adopter");
    nombreError++;
  }

  if (messageTextArea.val().trim().length == 0) {
    messageTextArea.next().text("Veuillez saisir un message");
    nombreError++;
  } else if (messageTextArea.val().trim().length < 15) {
    messageTextArea
      .next()
      .text("Le message doit comporter minimum 15 caractères");
    nombreError++;
  } else {}

  //   console.log(nombreError);
  if (nombreError == 0) {
    $("form").trigger("reset");
    success.text("Votre message est bien envoyé ! ");
    form.slideUp();
    success.fadeIn(1000);
  }
}

$("form").on("submit", onSubmitForm);