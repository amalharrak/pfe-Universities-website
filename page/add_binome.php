<?php
require_once('session.php');
?>
    
  <!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouveau Etudiant</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
        <?php include("Menu.php"); ?>
		<div class="container">
			<br>
			
                <form method="post" action="insert_binome.php" class="form" enctype="multipart/form-data">
                    			<div class="panel panel-primary  margetop">

				<div class="panel-heading">Nouveau Etudiant 1</div>
				<div class="panel-body">
					
					
						<div class="form-group">
							<label for="NOM" class="control-label">NOM</label>
							<input type="text" name="NOM1" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM</label>
							<input type="text" name="PRENOM1" id="PRENOM" class="form-control"/>
						</div>
						
						<div class="form-group">
                            <label for="ID" class="control-label">CODE</label>
							<input  name="ID1" id="ID" class="form-control"/>
								
						</div>
						
                        <div class="form-group">
                            <label for="EMAIL" class="control-label">EMAIL</label>
							<input  name="EMAIL1" id="EMAIL" class="form-control"/>
								
						</div>
											
						
                    </div>
                    </div>
                    
                    
                                    			<div class="panel panel-primary  margetop">

							<div class="panel-heading">Nouveau Etudiant 2 </div>
				<div class="panel-body">
					
					
						<div class="form-group">
							<label for="NOM3" class="control-label">NOM</label>
							<input type="text" name="NOM2" id="NOM3" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM3" class="control-label">PRENOM</label>
							<input type="text" name="PRENOM2" id="PRENOM3" class="form-control"/>
						</div>
						
						<div class="form-group">
                            <label for="ID3" class="control-label">CODE</label>
							<input  name="ID2" id="ID3" class="form-control"/>
								
						</div>
						
                        <div class="form-group">
                            <label for="EMAIL3" class="control-label">EMAIL</label>
							<input  name="EMAIL2" id="EMAIL3" class="form-control"/>
								
						</div>
											
						
							
					
				</div>
                    </div>
                    
                     <div class="col-md-12">
               <!-- <input type="submit" class="btn btn-success btn-send" value="suivant" name="Enregistrer">-->
            
                    <button type="submit" value="suivant" name="Enregistrer" class="btn btn-primary">Enregistrer</button>
                   </div> 
                    
                </form>
			</div>
			
			
				
	
	</body>
</html>