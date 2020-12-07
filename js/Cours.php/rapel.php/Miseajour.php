<?php
  // Connexion
  include 'Conexion.php';

  // La requête
  $sql = "UPDATE tproduit SET PriUni = 1.1 * PriUni WHERE CatPro = 'RAM'";

  // Exécution de la requête
  $resultat = $pdo->exec($sql);

  if ($resultat == FALSE) {
    $errInfos = $pdo->errorInfo();
    echo "La requête a échouée pour la raison: " . $errInfos[2];
  } else {
    echo "$resultat enregistrement(s) ont été modifiés";
  }

  // Déconnexion
  $pdo = null;
?>