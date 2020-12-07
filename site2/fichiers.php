<?php
   
  
    function findUserByLogin($LOGIN){
        
        global $con;
        
        $statement=$con->prepare("SELECT LOGIN FROM utilisateur WHERE LOGIN=?");
        
        $statement->execute(array($LOGIN));
        
        $count=$statement->rowCount();
        
        return $count;
        
    }
	
	 function findUserByEmail($EMAIL){
	     
        global $con;
        
        $statement=$con->prepare("SELECT EMAIL FROM utilisateur WHERE EMAIL=?");
        
        $statement->execute(array($EMAIL));
        
        $count=$statement->rowCount();
        
        return $count;
        
    }
     function redirectPage($messag, $url = nul, $seconds=2){
         
        if($url===null){
            
            $url='dashBoard.php';
            
            $back='HomePage';
            
        }elseif($url=='back'){
            
            if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
                
                $url=$_SERVER['HTTP_REFERER'];
                
                $back='Previous Page';
                
            }else{
                
                $url='dashBoard.php';
                
                $back='HomePage';
            }
            
        }
        echo $messag;
        
        echo "<div class='alert alert-info'> You Will be redirected after $seconds seconds</div>";
        
        header("refresh:$seconds;url=$url");
        
        exit();
    }
	
?>