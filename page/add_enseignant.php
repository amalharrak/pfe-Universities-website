<?php
require_once('session.php');
?>
	
 <!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouveau Enseignant</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
        <?php include("Menu.php"); ?>
		<div class="container">
			<br>
			
			<div class="panel panel-primary  margetop">
				<div class="panel-heading">Nouveau Enseignant </div>
				<div class="panel-body">
					<form method="post" action="insert_ens.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="NOM" class="control-label">NOM</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
						</div>
						
						<div class="form-group">
                            <label for="ID" class="control-label">CODE</label>
							<input  name="ID" id="ID" class="form-control"/>
								
						</div>
						
                        <div class="form-group">
                            <label for="EMAIL" class="control-label">EMAIL</label>
							<input  name="EMAIL" id="EMAIL" class="form-control"/>
								
						</div>
                          <div class="form-group">
                            <label for="Nbr_binome" class="control-label">Nbr_binome</label>
							<input  name="Nbr_binome" id="Nbr_binome" class="form-control" value="0"/>
								
						</div>
                          <div class="form-group">
                            <label for="ETAT" class="control-label">ETAT</label>
                              
							<input  name="ETAT" id="ETAT" class="form-control" value="1"/>
                        </div>
											
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
	</body>
</html>