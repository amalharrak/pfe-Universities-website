<?php

$tab=array('color'=>array('b','r','g'),
		  'food'=>array('b','r','g')		  
		  );

echo $tab['color'][0];


	 ?>



$i=0;
while($i<count($tableau){  //cacul long de tab
echo $tableau[$i]. ‘<br/>’;
$i++;
}



foreach($tableau as $element) {
echo $element.'<br/>';
}


   /// Mth GET!!!!!!!!!!!!!!!!!!      
			
	<//a href="index.php?nom=amal&prnom=harrak">donner</a>
			  
			<?//php
if(isset($_GET ['prnom']) AND isset ($_GET ['nom']))
{echo'bb'.$_GET['prnom'].' '.$_GET['nom'];}
		else{ echo'noo';}
		
		//?> 
		
