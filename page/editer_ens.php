<?php
	require_once('session.php');
	
	require_once('conexionbd.php');
	



	
$idd=$_GET['ID'];
  $requete="select * from enseignant where ID=$idd";
	$resultat = $pdo->query($requete);
	$etu=$resultat->fetch();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Edition d'un Enseignant</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<?php  include('Menu.php');?>
		<div class="container">
			<br>
			
			<div class="panel panel-primary margetop">
				<div class="panel-heading">Editer un Enseignant</div>
				<div class="panel-body">
					<form method="post" action="update_ens.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="id" class="control-label" >id d'enseignant:
								
									<?php echo $etu['ID']; ?>
							</label>
							<input type="hidden" name="ID" 
									id="id" class="form-control" placeecholder="id"
									       value="<?php echo $etu['ID']; ?>"/>
						</div>
						<div class="form-group">
							<label for="NOM" class="control-label">NOM:</label>
							<input type="text" name="NOM" id="NOM" 
								placeecholder="NOM" class="form-control"
									value="<?php echo $etu['NOM']; ?>"/>
						</div>
					
						
							<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM:</label>
							<input type="text" name="PRENOM" id="PRENOM" 
								placeecholder="PRENOM" class="form-control"
									value="<?php echo $etu['PRENOM']; ?>"/>
						</div>
						
						<div class="form-group">
							<label for="EMAIL" class="control-label">EMAIL:</label>
							<input type="text" name="EMAIL" id="EMAIL" 
								placeecholder="EMAIL" class="form-control"
									value="<?php echo $etu['EMAIL']; ?>"/>
						</div>
						
                        
                        
                        <div class="form-group">
							<label for="Nbr_binome" class="control-label">Nbr_binome:</label>
							<input type="text" name="Nbr_binome" id="Nbr_binome" 
								placeecholder="Nbr_binome" class="form-control"
									value="<?php echo $etu['Nbr_binome']; ?>"/>
						</div>
                        
                        	<div class="form-group">
							<label for="ETAT" class="control-label">ETAT:</label>
							<input type="text" name="ETAT" id="ETAT" 
								placeecholder="ETAT" class="form-control"
									value="<?php echo $etu['ETAT']; ?>"/><br>
                                <label>*choix 0: Desactier ETAT(aucune affectation)</label><br>
                                <label>*choix 1: Activer ETAT(une affectation)</label> 
						</div>
						
						
				
						<button type="submit" class="btn btn-primary">Enregistrer</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>