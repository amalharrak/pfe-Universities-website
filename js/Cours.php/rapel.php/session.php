






// formulaire
<html>
<head>
<title>Accès réservé au site</title>
</head>
<body>
<form method="post" action="page1.php">
<fieldset>
<legend>Saisissez votre nom et mot de passe</legend>
<label>Nom :
<input type="text" name="nom" />
</label><br /><br />
<label>Password :
<input type="text" name="pass" />
</label><br />
<input type="submit" value="Envoyer" />
<input type="reset" value="Effacer" />
</fieldset>
</form>
</body>
</html>


// page 1

<?php
session_start(); //demarer session avant tous pour suavgareder les data

//recuperer base de données
$login="dounia";
$motpass="abcd";

//Récupération des valeurs saisies du formaulaire
$nom=$_POST['nom'];
$pass=$_POST['pass'];

//Vérification
if($nom==$login AND $pass==$motpass)
{
	//stocker dans session
$_SESSION['nom']=$nom;
$_SESSION['pass']=$pass;
	
//Redirection vers la page à accès réservé
header('location:page2.php');
}
else
{
//Redirection vers la page de saisie du code

header('location:formaulaire.php');
}
?>


// page2

<?php
session_start();
//création du contenu personnalisé

$message= "<h1>BONJOUR ".$_SESSION['nom']."</h1>";
echo $message;

?>





























➢ Une session :est un mécanisme permettant de
sauvegarder temporairement sur le serveur des
informations relatives à un utilisateur.




➢ Les cookies :permettent de stocker des informations
sur l'ordinateur des visiteurs d’un site, pendant plusieurs
mois.



Les Sessions

➢ Démarrer une session: session_start();
➢ La superglobale $_SESSION permet l’initialisation et
la récupération des valeurs associées à une session.
➢ Ecriture d’une variable de session:
$_SESSION[‘nom’]=‘valeur’;
➢ Lecture d’une variable de session:
echo $_SESSION[‘nom’];
Les Sessions(suite)



➢ Pour utiliser une variable de session, il est
fondamental de faire le test en utilisant la fonction
isset().
➢ Supprimer une variable de session:
unset($_SESSION(‘name’);
➢ Supprimer toutes les variables de session:
session_unset();
➢ Détruire une session:
session_destroy();