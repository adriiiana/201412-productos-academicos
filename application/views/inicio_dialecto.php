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
        <td>Descripcion</td>
        <td></td>
        <td></td>
    </tr>

    <?php
        foreach( $data as $dialecto )
        {
            echo "<tr>";
                echo "<td>".$dialecto->id."</td>";
                echo "<td>".$dialecto->nombre."</td>";
                echo "<td>".$dialecto->descripcion."</td>";
                echo "<td><a href=".base_url()."index.php/Dialecto_ctrl/view_update/".$dialecto->id.">EDITAR</a></td>";
                echo "<td><a href=".base_url()."index.php/Dialecto_ctrl/delete/".$dialecto->id.">ELIMINAR</a></td>";;
            echo "</tr>";
        }
    ?>
</table>


<form method="link" <?php  echo 'action="'.base_url().'index.php/Dialecto_ctrl/view_add"' ?>>
    <input type="submit" value="Agregar un Dialecto">
</form>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
