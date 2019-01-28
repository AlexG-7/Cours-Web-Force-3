var firstnameInput = $("input[name=firstname]");
var categorySelect = $("select[name=category]");
var messageTextArea = $("textarea[name=message]");
var success = $(".success");
var form = $("form");

function onSubmitForm(event) {
  event.preventDefault();
  var nombreError = 0;

  // console.log($(this));
  // console.log(event);

  $("p.error").text("");

  if (
    firstnameInput.val().trim().length < 2 ||
    firstnameInput.val().trim().length > 10
  ) {
    firstnameInput
      .next()
      .text("Le prénom doit comporter entre 2 et 10 caractères");
    nombreError++;
  }

  if (categorySelect.val() == 0) {
    categorySelect.next().text("Veuillez choisir une catégorie");
    nombreError++;
  }

  if (messageTextArea.val().trim().length == 0) {
    messageTextArea.next().text("Veuillez saisir un message");
    nombreError++;
  } else if (
    messageTextArea.val().trim().length < 10 ||
    messageTextArea.val().trim().length > 100
  ) {
    messageTextArea
      .next()
      .text("Le message doit comporter entre 10 et 100 caractères");
    nombreError++;
  } else {}

  console.log(nombreError);
  if (nombreError == 0) {
    $("form").trigger("reset");
    success.text("Votre message est bien envoyé ! ");
    form.slideUp();
    success.fadeIn(1000);
  }
}

$("form").on("submit", onSubmitForm);