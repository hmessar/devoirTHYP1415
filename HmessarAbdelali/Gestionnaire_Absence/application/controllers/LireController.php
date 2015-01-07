<?php

class LireController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		echo "controller";
    }
    
    public function listeabsannceAction() {
        
try {
      $bdd = mysqli_connect('localhost' ,'root', '', 'flux_etu')or die ("error".mysqli_error($flux_etu)) ;;
    }
     catch(Exception $ex) {
	die('Erreur : '.$e->getMessage());
   }
	$query="select * from absence where Abs_pre = 'Absence' "
                . " "  or die ("error".mysqli_error($flux_etu));
	$req = $bdd->query($query);
	
	if ($req = $bdd->query($query))

        echo "<table border='1'>";
         
	while ( $ligne =$req->fetch_row())
	{
	     /// J'ai arreter ic avec Error d'afichage  
            echo "<tr> <td> " . $ligne[0]."</td>  "
            . " <td> " . $ligne[1]."</td>  "        
             ." <td> " . $ligne[2]."</td>  "  ;
               
	}
        echo "</tr></table> ";
	 $req->close();
      
        
    }


}

