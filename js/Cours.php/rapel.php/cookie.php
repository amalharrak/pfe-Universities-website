

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


//page 1

<?php
// recuperer d'une base de données
$login="dounia";
$motpass="abcd";

//Récupération des valeurs saisies
$nom=$_POST['nom'];
$pass=$_POST['pass'];

//Vérification
if($nom==$login AND $pass==$motpass)
{
$expir=time() + 3600;
//creer des cookies pour stocker data
setcookie("nom",$nom,$expir);
setcookie("pass",$pass,$expir);
//Redirection vers la page à accès réservé

header('location:page2.php');
}
else
{
//Redirection vers la page de saisie du code

header('location:formulaire.php');
}
?>









//page 2

<?php
// tester si les cookie existe
if(isset($_COOKIE['nom']) AND isset($_COOKIE['pass']))
{
	//recuperer de BD
$login="dounia";
$motpass="abcd";
	//recuperer de cookie
$nom=$_COOKIE['nom'];
$pass=$_COOKIE['pass'];
	
//Vérification et création du contenu personnalisé
if($nom==$login AND $pass==$motpass)
{
$message= "<h1>BONJOUR ".$nom."</h1>";
$contenu="<p> Votre contenu</p>";
}
else
{
	header('location:saisieinfo.php');
}
}
else
{
	header('location:saisieinfo.php');
}

?>
<html>
<head>
<title>Accès réservé au site</title>
</head>
<body>
<?php
echo $message;
echo $contenu;
?>
</body>
</html>