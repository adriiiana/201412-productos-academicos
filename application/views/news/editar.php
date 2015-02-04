

<h3>Editar Carrera</h3>

<form id="form" name="form" action="<?php echo base_url()?>index.php/news/editarEnlace/<?php echo $id?>" method="POST">
	<table style="border-style:solid;border-color:blue;">
	<tr>
		<td colspan="2" style="text-align:center;">
			<h3>Agregar Nueva Carrera</h3>
			<hr/>
		</td>
	</tr>
	<tr>
		<td style="text-align:center;">
			<label for="titulo">Nombre:</label> 
			<input type="text" name="titulo" id='titulo' value="<?php echo $nombre;?>" />
			<br />
			<br />
			
	
			<input type="submit" id="editar "name="editar" value="Editar" /> 
		</td>
	</tr>
</table>
</form>
