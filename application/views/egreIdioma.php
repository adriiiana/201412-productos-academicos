<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Idioma del Egresado </title>
</head>
<body>

	<h3> Nombre: <?php echo $name ?> </h3>
	<h4> Matricula: <?php echo $matricula ?> </h4> <br/	>

	<h5> Agregar idioma al egresado</h5>
	<?php if( $no_idiomas != NULL ) ?>
	<?php echo '<form action="'.base_url().'index.php/Eidioma/add_egre_idioma" method="post">' ?>
		<input name="id_egresado" type="hidden" value="<?php echo $id ?>" />
		<select name="id_idioma" >
			<?php
				foreach ($no_idiomas as $key) {
					echo '<option value="'.$key['id'].'" > '.$key['idioma'].' </option>"';
				}
			 ?>
		</select>
		<input name="dominado" type="text" required placeholder="Procentaje dominado"/>%
		<?php if( $no_idiomas == NULL ) {  ?>
			<input type="submit" value="Agregar" disabled />
		<?php } ?>
		<?php if( $no_idiomas != NULL ) {  ?>
			<input type="submit" value="Agregar" />
		<?php } ?>
	</form>

	<h5> Quitar idioma al egresado</h5>
	<?php echo '<form action="'.base_url().'index.php/Eidioma/remove_egre_idioma" method="post">' ?>
		<input name="id_egresado" type="hidden" value="<?php echo $id ?>" />
		<select name="id_idioma" >
			<?php
				foreach ($idiomas as $key) {
					echo '<option value="'.$key['id'].'" > '.$key['idioma'].' </option>"';
				}
			 ?>
		</select>
		<?php if( $idiomas == NULL ) {  ?>
			<input type="submit" value="Agregar" disabled />
		<?php } ?>
		<?php if( $idiomas != NULL ) {  ?>
			<input type="submit" value="Remover" />
		<?php } ?>
	</form>

	<br/><a href="<?php echo base_url().'index.php/Egresadoctr'; ?>"> Egresados </a>
	<br/><a href="<?php echo base_url().'index.php/Mainctr'; ?>"> Menú Pricipal </a>

</body>
</html>