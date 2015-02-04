<?php

?>
<table style="border-style:solid;border-color:purple;">
<tr>
	<th>Id</th>
	<th>Nombre</th>
	
</tr>
<?php foreach($news as $carrera): ?>    
     <tr>       
          <td>  <?php echo $carrera->id ?></td>
          <td>  <?php echo $carrera->nombre ?></td>
          
     </tr>       
<?php endforeach ?>
</table>
<?php