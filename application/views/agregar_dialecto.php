<html lang="es">
	<body>
		<h1>Aqui se edita el dialecto</h1>		
		<?php echo '<form action="'.base_url().'index.php/Dialecto_ctrl/add" method="post">' ?>	
			<div id="">
				<label for="nombre" class="msj">Nombre:*</label><br />
				<input id="nombre" class="" type="text" name="nombre" placeholder="Nombre y Apellido"/>
			</div>
			<div id="">
				<label for="mensaje" class="msj">Descripcion:*</label><br />
				<textarea id="descripcion" class="" name="descripcion" placeholder="Escribe la descripcion" ></textarea>
			</div>
			
			<INPUT type="submit" value="Guardar Dialecto"> <INPUT type="reset">
		</form>
		
	</body>
</html>
