<html lang="es">
	<body>
		<h1>Este es el formulario</h1>
		<?php echo '<form action="'.base_url().'index.php/Historia_ctrl/update" method="post">' ?>
			<input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
			<div id="">
				<label for="nombre" class="msj">Nombre:*</label><br />
				<input id="nombre" class="" type="text" name="nombre" placeholder="Nombre y Apellido" value="<?php echo $data->nombre; ?>"/>
			</div>
			<div id="">
				<label for="nombre" class="msj">ID Egresado:*</label><br />
				<input id="id_eg" class="" type="text" name="id_eg" placeholder="" value="<?php echo $data->egresado_id; ?>"/>
			</div>
			
			<div id="">
				<label for="mensaje" class="msj">Descripcion:*</label><br />
				<textarea id="descripcion" class="" name="descripcion" placeholder="Escribe la descripcion" value="<?php echo $data->descripcion; ?>"></textarea>
			</div>
			<div id="">
				<label for="nombre" class="msj">Ocurrida el:*</label><br />
				<input id="fechaocu" class="" type="text" name="fechaocu" placeholder="" value="<?php echo $data->ocurrida_el; ?>"/>
			</div>
			
			
			<INPUT type="submit" value="Editar Historia"> <INPUT type="reset">
		</form>
		
	</body>
</html>
