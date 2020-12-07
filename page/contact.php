<? require_once('submit.php')?>
<!doctype html>
<html>
<head>
    	<meta charset="utf-8" />
		<title>Gestion des Etudiants</title>
	
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	
	
	<style type="text/css">
    td{
     	height: 40px;
        }
	</style>
</head>
<body>
    
   <?php include("Menu2.php");?>
			
				
   
    <div class="controls">
        <div class="row">
        
         <div class="container col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">	
              <div class="panel panel-primary margetop">
            <div class="panel-heading"><h4>Formulaire d'une réclamation</h4></div>
            <div class="panel-body">
		<!--<fieldset>
			<legend></legend>-->
			<!-- La balise Table pour formater l'affichage du formulaire -->
		<form id="contact-form" method="post" action="submit.php" role="form" class="container" enctype="multipart/form-data">
                
                <table>
                    <tr>
					<td><label>Code</label></td>
					<td><input type="text" name="code" placeholder="saisir votre code"/> </td>
				   </tr>
				<tr>
					<td><label>Nom</label></td>
					<td><input type="text" name="name" placeholder="saisir votre nom"/> </td>
				</tr>
				<tr>
					<td><label>Prenom</label></td>
					<td><input type="text" name="subject" placeholder="saisir votre prenom"/></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="saisir votre Email"/></td>
				</tr>
				<tr>
                    <td><label>Etudié à</label></td>
					<!-- Les deux inputs radio doivent avoir le meme nom -->
					<td>
                       FSR  <input type="radio" name="choix" value="F"> 
                         EST <input type="radio" name="choix" value="E"> 
						
					</td>
				</tr>
				<tr>
					<!-- Pour réstreindre le type des fichiers on utilise l'attribut "accept" -->
					<td><label>relvés de notes</label></td>
					<td><input type="file" accept="image/jpeg,image/png" name="attachment"></td>
				</tr>
				    <tr>
                   <td><label>Description</label></td> 
                    <td><i><textarea id="story" name="message" rows="20" cols="33">
                    exprimer vos besoin... 
                        </textarea></i></td>
					</tr>
				
				
				<tr>
                    
					<td colspan="2"><center>  <button type="submit"  name="submit" value="Envoyer"class="btn btn-success"> Envoyer</button>
                       <button type="reset" name="anuler" value="Anuler" class="btn btn-success"> Anuler</button> </center></td>
				</tr>
			</table>
                </form>
                  </div></div></div></div></div>

</body>
</html>
