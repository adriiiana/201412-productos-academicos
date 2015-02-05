<html lang="es">
	<body>
		<h1>Este es el formulario</h1>
		<?php echo '<form action="'.base_url().'index.php/Dialecto_ctrl/update" method="post">' ?>
			<input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
			<div id="">
				<label for="nombre" class="msj">Nombre:*</label><br />
				<input id="nombre" class="" type="text" name="nombre" placeholder="Nombre y Apellido" value="<?php echo $data->nombre; ?>" />
			</div>
			<div id="">
				<label for="mensaje" class="msj">Descripcion:*</label><br />
				<textarea id="descripcion" class="" name="descripcion" placeholder="Escribe la descripcion" ><?php echo $data->descripcion; ?></textarea>
			</div>
			
			<INPUT type="submit" value="Editar Dialecto"> <INPUT type="reset">
		</form>
		
	</body>
</html>
