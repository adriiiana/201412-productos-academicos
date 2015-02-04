<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
<table style="border-style:solid;border-color:purple;">
<tr>
	<td>Id</td>
	<td>Nombre</td>
	<td></td>
	<td></td>
</tr>
<?php foreach($news as $carrera): ?>    
     <tr>       
          <td>  <?php echo $carrera->id ?></td>
          <td>  <?php echo $carrera->nombre ?></td>
          <td>  </td>
          <td>  <?php echo "<a href=".base_url()."index.php/news/editar/".$carrera->id.">Editar<a> | " ?>
            <?php echo "<a href=".base_url()."index.php/news/eliminar/".$carrera->id.">Eliminar<a>" ?></td>
     </tr>       
<?php endforeach ?>
</table>
<?php