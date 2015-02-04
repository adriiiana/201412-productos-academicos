<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title> Dialecto </title>
</head>
<body>

	<h2> <?php echo $Titulo ?> </h2>

	<table>
		<tr>
			<td> <strong> Nombre </strong> </td>
			<td> </td>
			<td> </td>
		</tr>
		<?php 
			
			foreach ($items1 as $key ) {
				echo '<tr> <td>'.$key->nombre.'</td>';
				echo '<td> <a href="e_idioma/eliminar/'.$key->id.'"> Eliminar </a> </td>';
				echo '<td> <a href="'.base_url().'index.php/e_idioma/actualizar/'.$key->id.'"> Modificar </a> </td> </tr>';
			}

			foreach ($items2 as $key ) {
				echo '<tr> <td>'.$key->nombres.'</td>';
				echo '<td> <a href="e_idioma/eliminar/'.$key->id.'"> Eliminar </a> </td>';
				echo '<td> <a href="'.base_url().'index.php/e_idioma/actualizar/'.$key->id.'"> Modificar </a> </td> </tr>';
			}
		?>
	</table>

	<form action="<?php echo base_url() ?>index.php/e_idioma/<?php if(isset($modified)) echo 'actualizar'; else echo 'agregar'; ?>" method="POST">
		<br/><label> Idioma: </label>
		<input type="text" name="nombre" value="<?php if(isset($modified)) echo $modified[0]->nombre ?>" autofocus/> <br/>
		<input type="submit" value="<?php if(isset( $modified )) echo 'Modificar'; else echo 'Agregar'; ?>" />
		<input type="hidden" name="id" value="<?php if(isset($modified)) echo $modified[0]->id; ?>" />
		<?php if(isset($modified)) echo  '<a href="'.base_url().'index.php/e_idioma"> Cancelar </a>'?>
	</form>

</body>
</html>