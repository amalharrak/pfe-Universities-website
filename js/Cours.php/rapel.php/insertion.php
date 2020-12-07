<?php
  // Connexion
  include 'Conexion.php';

  // La requête
  $sql = "INSERT INTO tproduit VALUES ('20', 'DD500G', 'MEM', '2000', '150')";

  // Exécution de la requête
  $resultat = $pdo->exec($sql);


  if ($resultat == FALSE) {
    $errInfos = $bpdo->errorInfo();
    echo "La requête a échouée pour la raison: " . $errInfos[2];
  } else {
    echo "Un nouveau produit est ajouté à la base de données.";
  }

  // Déconnexion
  $pdo = null;
?>