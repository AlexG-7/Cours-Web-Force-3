<?php

if (!empty($_POST)) {
  extract($_POST);
}
elseif(!empty($_GET)) {
  extract($_GET);
}
else {
  $action = "saluer";
  $prenom = "John";
  $nom = "Doe";
}

$method = $_SERVER["REQUEST_METHOD"]; // GET ou POST

$data = [
  "method" => $method,
  "nom_complet" => $prenom . " " . $nom,
  "action" => $action
];

if ($action == "saluer") {
  if ($method == "POST") {
    $data["status"] = "error";
    $data["message"] = "Je veux petre appelé en GET pour saluer";

  } else {
    $data["status"] = "success";
    $data["message"] = "Bonjour " . $prenom . " ".$nom;
  }
}
elseif($action == "enregistrer") {
  if ($method == "GET") {
    $data["status"] = "error";
    $data["message"] = "Je veux petre appelé en POST pour enregistrer";

  } else {
    file_put_contents("noms.txt", $prenom . " " . $nom . PHP_EOL, FILE_APPEND);

    $data["status"] = "success";
    $data["message"] = "Nom enregistré";
  }
}
else {
  $data["status"] = "error";
  $data["message"] = "Action inconnue";
}

// Transforme un array PHP en JsonS
echo json_encode($data);


?>
