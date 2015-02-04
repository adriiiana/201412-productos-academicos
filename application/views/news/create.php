




<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>
<table style="border-style:solid;border-color:blue;">
	<tr>
		<th colspan="2" style="text-align:center;">
			<h3>Agregar Nueva Carrera</h3>
		</th>
	</tr>
	<tr>
		<td style="text-align:center;">
			<label for="title">Nombre:</label> 
			<input type="text" name="title" autofocus />
			<br />
			<br />
			
	
			<input type="submit" name="submit" value="Agregar" /> 
		</td>
	</tr>
</table>
</form>

<table style="border-style:solid;border-color:purple;">
<tr>
	<th>Id</th>
	<th>Nombre</th>
	<th></th>

</tr>
<?php if($news!=0){?>  

<?php foreach($news as $carrera): ?>    
     <tr>       
          <td>  <?php echo $carrera->id ?></td>
          <td>  <?php echo $carrera->nombre ?></td>
    
          <td>  <?php echo "<a href=".base_url()."index.php/news/editar/".$carrera->id.">Editar<a> | " ?>
            <?php echo "<a href=".base_url()."index.php/news/eliminar/".$carrera->id.">Eliminar<a>" ?></td>
     </tr>       
<?php endforeach; 
	} else{
		Echo "No hay registros en la tabla";
	}
?>
</table>



