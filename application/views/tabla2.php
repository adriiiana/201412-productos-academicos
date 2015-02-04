<html>
      <head>
<title>
    Salarios
    </title>
        <link href="http://localhost/SisEgresa/css/styleTab.css" rel="stylesheet" type="text/css" />
        </head>
<body>
    <div id="contenedor">
    <table class="tablaIdioma">
        <tr>
            <th>ID</td>
            <th>Puesto_id</th>
            <th>Experiencia</th>
            <th>MontoMin</th>
            <th>MontoMax</th>
            <th>Opciones</th>
            
            </tr>
        <?php
        if($campos!=FALSE){
            foreach ($campos->result() as $row){
                echo '<tr class="filas">';
                echo "<td>"; echo $row->id; echo "</td>";
                echo "<td>"; echo $row->puesto_id; echo "</td>";
                echo "<td>"; echo $row->experiencia; echo "</td>";
                echo "<td>"; echo $row->monto_min; echo "</td>";
                echo "<td>"; echo $row->monto_max; echo "</td>";
                echo "<td><a href=" .base_url().'index.php/salarios/editar/'.$row->id.">Editar </a> |";
                echo "<a href=" .base_url().'index.php/salarios/borrar/'.$row->id.">   Eliminar </a></td>";
                echo "</tr>";
            }
        }
        else
        {
            echo "No hay campos";
        }
            ?>   
        
        </tr>
    </table>
    </div>
</body>
</html>