
<?php


//require_once('conexionbd.php');
$pdo= new PDO("mysql:host=localhost;dbname=pfe","root","amalharrak");
    	//$pdo = new PDO('mysql:host=localhost;dbname=pfe', 'root', 'amalharrak');
  if(isset($_POST['submit'])) // Si on clique sur S'inscrire
	{  
		// On définis les variables nécéssaires
		//htmlspecialchars() permet de protéger les champs afin d'éviter des failles XSS
		echo "heloo";
		$prenom1 = htmlspecialchars($_POST['prenom1']);
		$nom1 = htmlspecialchars($_POST['nom1']);
		$email1 = htmlspecialchars($_POST['email1']);
		$code1 = $_POST['code1'];        // Pas besoin de protéger un type="number"
		
        
        $prenom2 = htmlspecialchars($_POST['prenom2']);
		$nom2 = htmlspecialchars($_POST['nom2']);
		$email2 = htmlspecialchars($_POST['email2']);
		$code2 = $_POST['code2'];
        
    if($prenom1 AND $nom1 AND $email1 AND $code1 AND $prenom2 AND $nom2 AND $email2 AND $code2) // On vérifie si elles existent
		{
			// On insère dans la BDD qui sera `inscription` et la table `user`
		$req1 = $pdo->exec("INSERT INTO `binome` ( `ID1`, `NOM1`,`PRENOM1`, `EMAIL1`, `ID2`, `NOM2`,`PRENOM2`, `EMAIL2`) VALUES ( '".$code1."','".$nom1."','".$prenom1."','".$email1."','".$code2."','".$nom2."','".$prenom2."','".$email2."')");
           
	    }
	 else // Tous les renseignement ne sont pas remplis
		{
			echo "Veuillez renseigner tous les champs !";
		}
        
        //	if($prenom2 AND $nom2 AND $email2 AND $code2) // On vérifie si elles existent
		//{
			// On insère dans la BDD qui sera `inscription` et la table `user`
		//	$req1 = $pdo->exec("INSERT INTO `etudiants` ( `ID`, `NOM`,`PRENOM`, `EMAIL`) VALUES ( '".$code2."','".$nom2."','".$prenom2."','".$email2."')");
           
		//}
        
	} 

?>

<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Inscription en PEF  </tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
     
         <?php include("Menu2.php");?>
          
        
                    <form id="contact-form" method="post" action="valider.php" role="form" class="container">

  <div class="row">
    <div class="col-12">
                <div class="panel panel-primary margetop">
                    <div class="panel-heading"><h4>Cocher les modules validés</h4> </div>
            <div class="panel-body">
        
      <table class="table table-bordered table-striped" >
        <thead>
          <tr>
            <th scope="col">Code</th>  
            <th scope="col">Semestre</th>
            <th scope="col">Modules validés</th>  
              <th scope="col">Nombre_Note éliminatoire</th> 
            <th scope="col">Moyenne </th>  
          </tr>
        </thead>
        <tbody>
            <tr>
            <td rowspan="6">
                <div class="row">
              
 <div class="form-group col-xs-10">

							<label for="e1" class="control-label" >Code d'Etudiant 1:
									<?php echo $code1; ?>
							</label>
							<input type="hidden" name="code1" 
									id="e1" class="form-control" placeecholder="id"
									       value="<?php echo $code1; ?>"/>
						</div>
					
					
					
                
            </div></td>
            <td> S1 </td>
            <td> 
                    <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M1</label>
			<input type="checkbox" class="form-control" id="e1" value="1" name="S11[]">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M2</label>
			<input type="checkbox" class="form-control" id="e2" value="2" name="S11[]">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M3</label>
			<input type="checkbox" class="form-control" id="e2" value="3" name="S11[]">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M4</label>
			<input type="checkbox" class="form-control" id="e2" value="4" name="S11[]">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M5</label>
			<input type="checkbox" class="form-control" id="e2" name="S11[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M6</label>
			<input type="checkbox" class="form-control" id="e2" name="S11[]" value="6">		
			</div>	       
            
                 <div class="form-group col-xs-2">
			<label for="e2">M7</label>
			<input type="checkbox" class="form-control" id="e2" name="S11[]" value="7">		
			</div>	
           
		</div>
            </td>
                
                
                  <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NS1" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MS1" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
                
          </tr>
            
            
           <tr>
            <td> S2 </td>
            <td>       
                             <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M8</label>
			<input type="checkbox" class="form-control" id="e1" name="S21[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M9</label>
			<input type="checkbox" class="form-control" id="e2" name="S21[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M10</label>
			<input type="checkbox" class="form-control" id="e2" name="S21[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M11</label>
			<input type="checkbox" class="form-control" id="e2" name="S21[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M12</label>
			<input type="checkbox" class="form-control" id="e2" name="S21[]" value="5">		
			</div>	
             
                 <div class="form-group col-xs-2">
			<label for="e2">M13</label>
			<input type="checkbox" class="form-control" id="e2" name="S21[]" value="6">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M14</label>
			<input type="checkbox" class="form-control" id="e2" name="S21[]" value="7">		
			</div>                     
		</div>
            </td>
                  <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NS2" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
               
               
               
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MS2" required="required" data-error="Lastname is required." >
                  </div></div>
              </td>   
          </tr>
            
                      <tr>
            <td> S3 </td>
            <td>       
               <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M15</label>
			<input type="checkbox" class="form-control" id="e1" name="S31[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M16</label>
			<input type="checkbox" class="form-control" id="e2" name="S31[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M17</label>
			<input type="checkbox" class="form-control" id="e2" name="S31[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M18</label>
			<input type="checkbox" class="form-control" id="e2" name="S31[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M19</label>
			<input type="checkbox" class="form-control" id="e2" name="S31[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M20</label>
			<input type="checkbox" class="form-control" id="e2" name="S31[]" value="6">		
			</div>	       
                   
		</div>
            </td>
                 <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NS3" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
                          
                          
                          
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MS3" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>              
          </tr>
            
                      <tr>
            <td> S4 </td>
            <td>       
                             <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M21</label>
			<input type="checkbox" class="form-control" id="e1" name="S41[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M22</label>
			<input type="checkbox" class="form-control" id="e2" name="S41[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M23</label>
			<input type="checkbox" class="form-control" id="e2" name="S41[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M24</label>
			<input type="checkbox" class="form-control" id="e2" name="S41[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M25</label>
			<input type="checkbox" class="form-control" id="e2" name="S41[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M26</label>
			<input type="checkbox" class="form-control" id="e2" name="S41[]" value="6">		
			</div>	       
                   
		</div>
            </td>
                          
                                <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NS4" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
            <td><div class="row">
			     <div class="form-group col-xs-8">
			         <input type="text" class="form-control" id="e1" name="MS4" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
          </tr>
            
                      <tr>
            <td> S5 </td>
            <td>       
                             <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M27</label>
			<input type="checkbox" class="form-control" id="e1" name="S51[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M28</label>
			<input type="checkbox" class="form-control" id="e2" name="S51[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M29</label>
			<input type="checkbox" class="form-control" id="e2" name="S51[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M30</label>
			<input type="checkbox" class="form-control" id="e2" name="S51[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M31</label>
			<input type="checkbox" class="form-control" id="e2" name="S51[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M32</label>
			<input type="checkbox" class="form-control" id="e2" name="S51[]" value="6">		
			</div>	       
                   
		</div>
            </td>
                          
                                <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NS5" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MS5" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
                          
          </tr>
            
                  <tr>
            <td> S6 </td>
            <td>       
                           <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M33</label>
			<input type="checkbox" class="form-control" id="e1" name="S61[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M34</label>
			<input type="checkbox" class="form-control" id="e2" name="S61[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M35</label>
			<input type="checkbox" class="form-control" id="e2" name="S61[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M36</label>
			<input type="checkbox" class="form-control" id="e2" name="S61[]" value="4">		
			</div>	
                   
        
                   
		</div>
            </td>
                 <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NS6" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
             
					      <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MS6" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
                     
          </tr>
      
            
        
        <tr>
            <td rowspan="6">
                <div class="row">
             
					<div class="form-group col-xs-10">

							<label for="e1" class="control-label" >Code d'Etudiant 2:
									<?php echo $code2; ?>
							</label>
							<input type="hidden" name="code2" 
									id="e1" class="form-control" placeecholder="id"
									       value="<?php echo $code2; ?>"/>
						</div>
					
                
                       </div></td>
                        <td> S1 </td>
            <td> 
                    <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M1</label>
			<input type="checkbox" class="form-control" id="e1" value="1" name="S12[]">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M2</label>
			<input type="checkbox" class="form-control" id="e2" value="2" name="S12[]">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M3</label>
			<input type="checkbox" class="form-control" id="e2" value="3" name="S12[]">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M4</label>
			<input type="checkbox" class="form-control" id="e2" value="4" name="S12[]">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M5</label>
			<input type="checkbox" class="form-control" id="e2" name="S12[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M6</label>
			<input type="checkbox" class="form-control" id="e2" name="S12[]" value="6">		
			</div>	       
            
                 <div class="form-group col-xs-2">
			<label for="e2">M7</label>
			<input type="checkbox" class="form-control" id="e2" name="S12[]" value="7">		
			</div>	
           
		</div>
            </td>
                  <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NNS1" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MoyS1" required="required" data-error="Lastname is required." >
                  </div></div>
              </td>
                
          </tr>
            
            
           <tr>
            <td> S2 </td>
            <td>       
                             <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M8</label>
			<input type="checkbox" class="form-control" id="e1" name="S22[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M9</label>
			<input type="checkbox" class="form-control" id="e2" name="S22[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M10</label>
			<input type="checkbox" class="form-control" id="e2" name="S22[]" value="M3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M11</label>
			<input type="checkbox" class="form-control" id="e2" name="S22[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M12</label>
			<input type="checkbox" class="form-control" id="e2" name="S22[]" value="5">		
			</div>	
             
                 <div class="form-group col-xs-2">
			<label for="e2">M13</label>
			<input type="checkbox" class="form-control" id="e2" name="S22[]" value="6">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M14</label>
			<input type="checkbox" class="form-control" id="e2" name="S22[]" value="7">		
			</div>                     
		</div>
            </td>
                     <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NNS2" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
            
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MoyS2" required="required" data-error="Lastname is required." >
                  </div></div>
              </td>   
          </tr>
            
                      <tr>
            <td> S3 </td>
            <td>       
               <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M15</label>
			<input type="checkbox" class="form-control" id="e1" name="S32[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M16</label>
			<input type="checkbox" class="form-control" id="e2" name="S32[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M17</label>
			<input type="checkbox" class="form-control" id="e2" name="S32[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M18</label>
			<input type="checkbox" class="form-control" id="e2" name="S32[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M19</label>
			<input type="checkbox" class="form-control" id="e2" name="S32[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M20</label>
			<input type="checkbox" class="form-control" id="e2" name="S32[]" value="6">		
			</div>	       
                   
		</div>
            </td>
                  <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NNS3" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MoyS3" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>              
          </tr>
            
                      <tr>
            <td> S4 </td>
            <td>       
                             <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M21</label>
			<input type="checkbox" class="form-control" id="e1" name="S42[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M22</label>
			<input type="checkbox" class="form-control" id="e2" name="S42[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M23</label>
			<input type="checkbox" class="form-control" id="e2" name="S42[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M24</label>
			<input type="checkbox" class="form-control" id="e2" name="S42[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M25</label>
			<input type="checkbox" class="form-control" id="e2" name="S42[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M26</label>
			<input type="checkbox" class="form-control" id="e2" name="S42[]" value="6">		
			</div>	       
                   
		</div>
            </td>
                                 <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NNS4" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
            <td><div class="row">
			     <div class="form-group col-xs-8">
			         <input type="text" class="form-control" id="e1" name="MoyS4" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
          </tr>
            
                      <tr>
            <td> S5 </td>
            <td>       
                             <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M27</label>
			<input type="checkbox" class="form-control" id="e1" name="S52[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M28</label>
			<input type="checkbox" class="form-control" id="e2" name="S52[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M29</label>
			<input type="checkbox" class="form-control" id="e2" name="S52[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M30</label>
			<input type="checkbox" class="form-control" id="e2" name="S52[]" value="4">		
			</div>	
                   
             <div class="form-group col-xs-2">
			<label for="e2">M31</label>
			<input type="checkbox" class="form-control" id="e2" name="S52[]" value="5">		
			</div>	
                   
            <div class="form-group col-xs-2">
			<label for="e2">M32</label>
			<input type="checkbox" class="form-control" id="e2" name="S52[]" value="6">		
			</div>	       
                   
		</div>
            </td>
                                 <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NNS5" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MoyS5" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
                          
          </tr>
            
                  <tr>
            <td> S6 </td>
            <td>       
                           <div class="row">
			<div class="form-group col-xs-2">
			<label for="e1">M33</label>
			<input type="checkbox" class="form-control" id="e1" name="S62[]" value="1">
			</div>
			<div class="form-group col-xs-2">
			<label for="e2">M34</label>
			<input type="checkbox" class="form-control" id="e2" name="S62[]" value="2">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M35</label>
			<input type="checkbox" class="form-control" id="e2" name="S62[]" value="3">		
			</div>	
            
            <div class="form-group col-xs-2">
			<label for="e2">M36</label>
			<input type="checkbox" class="form-control" id="e2" name="S62[]" value="4">		
			</div>	
                   
        
                   
		</div>
            </td>
                             <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="NNS6" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>
           
              <td><div class="row">
			<div class="form-group col-xs-8">
			<input type="text" class="form-control" id="e1" name="MoyS6" required="required" data-error="Lastname is required.">
                  </div></div>
              </td>              
          </tr>
      
                  
            
            
        </tbody>
      </table>
                
       <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="envoyer" >
            </div>          
                
                
    </div>
  </div>
</div>
    </div>
        </form>
        
        
        
             
    </body>
</HTML>    







