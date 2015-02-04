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
			<td> <strong> Descripción </strong> </td>
			<td> </td>
			<td> </td>
		</tr>
		<?php 
			foreach ($items as $key ) {
				echo '<tr> <td>'.$key->nombre.'</td>';
				echo '<td>'.$key->descripcion.'</td>';
				echo '<td> <a href="'.base_url().'index.php/e_dialecto/eliminar/'.$key->id.'"> Eliminar </a> </td>';
				echo '<td> <a href="'.base_url().'index.php/e_dialecto/actualizar/'.$key->id.'"> Modificar </a> </td> </tr>';
			}
		?>
	</table>

	<form action="<?php echo base_url() ?>index.php/e_dialecto/<?php if(isset($modified)) echo 'actualizar/'.$modified[0]->id; else echo 'agregar'; ?>" method="POST">
		<br/><label> Nombre del Dialecto: </label>
		<input type="text" name="nombre" value="<?php if(isset($modified)) echo $modified[0]->nombre ?>" autofocus/> <br/>
		<label> Descripción: </label>
		<input type="text" name="descripcion" value="<?php if(isset($modified)) echo $modified[0]->descripcion; ?>" /> <br/>
		<input type="submit" value="<?php if(isset( $modified )) echo 'Modificar'; else echo 'Agregar'; ?>" />
		<input type="hidden" name="id" value="<?php if(isset($modified)) echo $modified[0]->id; ?>" />
		<?php if(isset($modified)) echo  '<a href="'.base_url().'index.php/dialecto"> Cancelar </a>'?>
	</form>

</body>
</html>