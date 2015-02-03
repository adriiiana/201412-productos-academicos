
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resumen de Eventos</title>
<style>
.clase {
    width: 50%;
    height: 10%;
    color: white;
    border: 1px solid #0174DF;
    background-color: #0174DF;
}

.clase2{
	width: 50%;
    height: 10%;
    color: black;
    background-color: #CEE3F6;
}
.clase3{
	width: 50%;
    height: 10%;
    color: black;
    border: 1px solid #0174DF;
    background-color: white;
}
.eli{
	width: 5%;
    height: 5%;
    color: black;
    background-color: #FF0000;	

}

.edi{
	width: 5%;
    height: 5%;
    color: black;
    background-color: #04B404;
}
.elis{
	border: 3px solid yellow;
    background:#FF0000;

}
.edis{
    background:#04B404;
    border: 3px solid yellow;
}
.classeli{
	background:#FF0000;
	border: 1px solid #FF0000;
}
.classedit{
	background:#04B404;
	border: 1px solid #04B404;
}
.clasetabla{
	background-color: #151515;
	color: white;
}
.buttom{
	background:#01DF01;
	border: 1px solid #01DF01;
}
.classdiv{
	background:#01DF01;
	border: 1px solid #01DF01;
	width: 31.9%;
	height: 5%;
	color: white;
	text-align: center;
}
.text{
	background:#848484;
	border: 1px solid #848484;
	color: white;
}
</style>
<script type="text/javascript">
	function seleccionada(obj) {
	    obj.className="clase3";
	}

	function deseleccionada(obj) {
	    obj.className="clase2";
	}
	function selecedit(obj){
		obj.className="edis";
	}
	function seleceli(obj){
		obj.className="elis";
	}
	function deseleceli(obj){
		obj.className="classeli";
	}
	function deselecedi(obj){
		obj.className="classedit";
	}
</script>
</head>
<body>
	<a href="<?php  echo base_url()?>">Menu Principal</a><br><br>
	<div id="container">
		<h1>Elimina o modifica eventos</h1>
		<table style="border: 1px solid #0174DF;width: 80%;">
		<tr class="clase"><td><b>ID</b></td><td><b>Nombre</b></td><td><b>Carrera ID</b></td><td><b>Descripcion</b></td><td><b>Fecha de inicio</b></td><td><b>Fecha de finalizacion</b></td></tr>
		<?php 
			foreach ($all->result_array() as $row) {
				echo "<tr class='clase2' onmousemove='seleccionada(this)'
onmouseout='deseleccionada(this)'><td>".$row['id']."</td><td>".$row['nombre']."</td><td>".$row['carrera_id']."</td><td>".$row['descripcion']."</td>
<td>".$row['inicia_el']."</td><td>".$row['termina_el']."</td><td class='eli'><input type='button' 
onmouseout='deseleceli(this)' onmousemove='seleceli(this)' class='classeli' value='Eliminar' 
onclick = 'location=\"".base_url()."index.php/Event/delete/".$row['id']."\"'/></td>
<td class='edi'><input type='button' class='classedit' onmousemove='selecedit(this)' 
onmouseout='deselecedi(this)' value='Editar' 
onclick = 'location=\"".base_url()."index.php/Event/edit/".$row['id']."\"'/></td></tr>";
			
			}
	
		?>
		</table>
		<br />
		<br />
		<center>
		<div class="classdiv"><h3>Agrega un nuevo evento</h3></div>
		<form method="POST" action="">
			<table class="clasetabla">
				<tr><td><label><b>Nombre</b></label></td></tr>
				<tr><td><input size="40" type="text" class="text" name="nombre" required autofocus="on"<?php if(isset($old_data)) echo "value=\"".$old_data->nombre."\" /></td></tr>"; else echo "/></td></tr>\n"; ?>
				
				<tr><td><label><b>Carrera ID</b></label></td></tr>
				<tr><td><input size="40" type="text" class="text" name="carrera_id" required <?php if(isset($old_data)) echo "value=\"".$old_data->carrera_id."\" /></td></tr>"; else echo "/></td></tr>\n"; ?>
			
				<tr><td><label><b>Fecha de inicio</b></label></td></tr>
				<tr><td><input size="40" type="date" class="text" name="inicia_el" required <?php if(isset($old_data)) echo "value=\"".$old_data->inicia_el."\" /></td></tr>"; else echo "/></td></tr>\n"; ?>
				
				<tr><td><label><b>Fecha de finalizacion</b></label></td></tr>
				<tr><td><input size="40" type="date" class="text" name="termina_el" required <?php if(isset($old_data)) echo "value=\"".$old_data->termina_el."\" /></td></tr>"; else echo "/></td></tr>\n"; ?>
				
				<tr><td><label><b>Descripcion</b></label></td></tr>
				<tr><td><textarea COLS=50 ROWS=15 class="text" name="descripcion" required <?php if(isset($old_data)) echo ">".$old_data->descripcion."</textarea></td></tr>"; else echo "></textarea></td></tr>\n"; ?>
				 

				<tr><td><br /></td></tr>

				<?php if(isset($old_data)) echo "<input name=\"id\" type=\"text\" value=\"".$old_data->id."\" hidden/>\n"?>
				<tr><td ><center><input type="submit" class="buttom" value="Agregar Evento"/></center></td></tr>
			
			</table>
		</form>
	</div>
	</center>
</body>
</html>
