<?php
  // Connexion
  include 'Conexion.php';

  // La requête
  $sql = "SELECT * FROM tproduitcom";

  // Exécution de la requête
  $resultat = $pdo->query($sql);

  if ($resultat == FALSE) {
    $errInfos = $pdo->errorInfo();
    echo "La requête a échouée pour la raison: " . $errInfos[2];
  } else {
    echo '<p>Voici le contenu de la table tproduitcom</p>';
    echo '<ul>';
    while ($data = $resultat->fetch(PDO::FETCH_OBJ)) {
      echo
        "<li>" .
          "$data->RefPro - $data->DesPro - $data->CatPro - " .
          "$data->PriAch - $data->PriVen - $data->QuaSto" .
        "</li>";
    }
    echo '</ul>';
  }

  // Déconnexion
  $pdo = null;
?>