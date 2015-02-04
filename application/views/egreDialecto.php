<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Dialecto del Egresado </title>
</head>
<body>

	<h3> Nombre: <?php echo $name ?> </h3>
	<h4> Matricula: <?php echo $matricula ?> </h4> <br/	>

	<h5> Agregar Dialecto al egresado</h5>
	<?php if( $no_dialectos != NULL ) ?>
	<?php echo '<form action="'.base_url().'index.php/Edialecto/add_egre_dialecto" method="post">' ?>
		<input name="id_egresado" type="hidden" value="<?php echo $id ?>" />
		<select name="id_dialecto" >
			<?php
				foreach ($no_dialectos as $key) {
					echo '<option value="'.$key['id'].'" > '.$key['dialecto'].' </option>"';
				}
			 ?>
		</select>
		<input name="dominado" type="text" required placeholder="Procentaje dominado"/>%
		<?php if( $no_dialectos == NULL ) {  ?>
			<input type="submit" value="Agregar" disabled />
		<?php } ?>
		<?php if( $no_dialectos != NULL ) {  ?>
			<input type="submit" value="Agregar" />
		<?php } ?>
	</form>

	<h5> Quitar dialecto al egresado</h5>
	<?php echo '<form action="'.base_url().'index.php/Edialecto/remove_egre_dialecto" method="post">' ?>
		<input name="id_egresado" type="hidden" value="<?php echo $id ?>" />
		<select name="id_dialecto" >
			<?php
				foreach ($dialectos as $key) {
					echo '<option value="'.$key['id'].'" > '.$key['dialecto'].' </option>"';
				}
			 ?>
		</select>
		<?php if( $dialectos == NULL ) {  ?>
			<input type="submit" value="Agregar" disabled />
		<?php } ?>
		<?php if( $dialectos != NULL ) {  ?>
			<input type="submit" value="Remover" />
		<?php } ?>
	</form>

	<br/><a href="<?php echo base_url().'index.php/Egresadoctr'; ?>"> Egresados </a>
	<br/><a href="<?php echo base_url().'index.php/Mainctr'; ?>"> Menú Pricipal </a>

</body>
</html>