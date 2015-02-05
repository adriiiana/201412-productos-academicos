<html lang="es">
	<body>
		<h1>Aqui se edita la historia</h1>		
		<?php echo '<form action="'.base_url().'index.php/Historia_ctrl/add" method="post">' ?>	
			<div id="">
				<label for="nombre" class="msj">Nombre:*</label><br />
				<input id="nombre" class="" type="text" name="nombre" placeholder="Nombre y Apellido"/>
			</div>
			<div id="">
				<label for="nombre" class="msj">ID Egresado:*</label><br />
				<input id="id_eg" class="" type="text" name="id_eg" placeholder="Nombre y Apellido"/>
			</div>
			
			<div id="">
				<label for="mensaje" class="msj">Descripcion:*</label><br />
				<textarea id="descripcion" class="" name="descripcion" placeholder="Escribe la descripcion" ></textarea>
			</div>
			<div id="">
				<label for="nombre" class="msj">Ocurrida el:*</label><br />
				<input id="fechaocu" class="" type="text" name="fechaocu" placeholder="Nombre y Apellido"/>
			</div>
			
			
			<INPUT type="submit" value="Guardar Historia"> <INPUT type="reset">
		</form>
		
	</body>
</html>
