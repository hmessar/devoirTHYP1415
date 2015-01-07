<?php

class EcrireController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
        $xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');
	foreach ($xml->channel->item as $tof) {
            echo "<table>";
		echo "<tr> <td> <img src='".$tof->enclosure["url"]."' style='border:1px;'/> </td>";
                echo " <td> " . $tof->title . "</td> <br>";
                echo "<td> <input type='submit' value ='Absence' style='background-color:red'  /></td>";
                echo "<td> <input type='submit' value ='Presence' style='background-color:blue'  /></td>";
               
                echo "<td> <input type='button' onclick='ajouterabsence();' value ='Afficher Absence' style='background-color:yellow '  /></td>";
                echo "<td> <input type='button' onclick='recupirerabsence();' value ='Afficher Presence' style='background-color:violet '  /></td> </tr>";
            echo "</table>";
	}
       
    }
    
    public function  ajouterabsenceAction() {
        try {
        $bdd = mysqli_connect('localhost' ,'root', '', 'flux_etu')or die ("error".mysqli_error($flux_etu)) ;;
            }
       catch(Exception $ex) {
          die('Erreur : '.$e->getMessage());
             }
          $query="INSERT INTO etudiant(id , nom , prenom) values ('' , 'Masseix Kavin' , 'Mouhaned' ) "
                  . " "  or die ("error".mysqli_error($flux_etu));
          $query1="INSERT INTO absence(id_etudiant , Abs_pre , date) values (2 , 'absence' , '2014/12/06' ) "
                  . " "  or die ("error".mysqli_error($flux_etu));
          $req = $bdd->query($query);
          $req = $bdd->query($query1);
        
    }


}

