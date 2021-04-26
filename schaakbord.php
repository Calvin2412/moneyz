 <table>
    <?php
   
       for($row=1; $row<=8; $row++) {
       	   echo "<tr>";
       	   for($col=1; $col<=8; $col++) {
       	   	   if($col % 2 == 0) {
       	   	   	     $color = '#FFF';
       	   	   } else {
       	   	   	     $color = '#000';
       	   	   }

       	   	   if($row % 2 == 0) {
       	   	   	   if($col % 2 == 0){
       	   	   	      $color = '#000';
       	   	   } else {
       	   	   	      $color = '#FFF'; 
       	       }
       	   }
           echo "<td style='border:1px solid; height:60px; width:60px; background-color:".$color."'> </td>";
       }
       	   echo "</tr>";

     }

    ?>
 </table>