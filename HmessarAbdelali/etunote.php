<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title> Etud Note </title>
    </head>
    <body>
        
        <?php
        $xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');
	foreach ($xml->channel->item as $tof) {
            echo "<table>";
		echo "<tr> <td> <img src='".$tof->enclosure["url"]."'/> </td>";
                echo " <td> " . $tof->title . "</td> </tr>";
            echo "</table>";
	}
        ?>
    </body>
</html>