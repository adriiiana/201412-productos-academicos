<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<h1>aqui se debe de ver</h1>

	<div id="body">

		
		Egresados Existentes en la base de Datos: <?php echo $numFilas; ?>
		<br>
		<br>

<br>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>ID egresado</td>
        <td>Descripcion</td>
        <td>Ocurrida en:</td>
        <td></td>
        <td></td>
    </tr>

    <?php
        foreach( $data as $historia )
        {
            echo "<tr>";
                echo "<td>".$historia->id."</td>";
                echo "<td>".$historia->nombre."</td>";
                echo "<td>".$historia->egresado_id."</td>";
                echo "<td>".$historia->descripcion."</td>";
                echo "<td>".$historia->ocurrida_el."</td>";
                echo "<td><a href=".base_url()."index.php/Historia_ctrl/view_update/".$historia->id.">EDITAR</a></td>";
                echo "<td><a href=".base_url()."index.php/Historia_ctrl/delete/".$historia->id.">ELIMINAR</a></td>";;
            echo "</tr>";
        }
    ?>
</table>


<form method="link" <?php  echo 'action="'.base_url().'index.php/Historia_ctrl/view_add"' ?>>
    <input type="submit" value="Agregar Historia">
</form>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
