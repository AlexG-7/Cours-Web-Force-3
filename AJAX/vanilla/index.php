<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
</head>
<body>
    <button id="action">
        1er appel Ajax
    </button>
    <div id="reponse"></div>
    <script>
        document.getElementById("action").addEventListener("click",function(){
            // Instanciation de l'objet
            var xhttp = new XMLHttpRequest();
            // On définit ce qui va être fait après l'appel ajax
            xhttp.onreadystatechange = function(){
                // xhhtp.readyState === 4 : on a reçu la réponse du serveur
                // xttp.status === 200 : le serveur a répondu avec le code HTTP 200 OK
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    // dans xhttp.responseText, on a le contenu du fichier que l'on appelle
                    document.getElementById("reponse").innerHTML = xhttp.responseText;
                }
            };
            // Appel en HTTP GET du fichier hello.php à la racine du dossier ajax
            xhttp.open("GET","../hello.php");
            // Envoi de l'appel
            xhttp.send();
        });
    </script>
</body>
</html>
