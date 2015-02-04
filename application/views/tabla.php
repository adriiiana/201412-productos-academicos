<html>
    <head>
<title>
    IDIOMAS
    </title>
        <link href="http://localhost/SisEgresa/css/styleTab.css" rel="stylesheet" type="text/css" />
        </head>
<body>
    <div id="contenedor">
    <table class="tablaIdioma">
        
        <tr>
            <th>ID</th>
            <th>NombreIdioma</th>
            <th>Opciones</th>
            </tr>
        <?php
        if($campos!=FALSE){
            foreach ($campos->result() as $row){
                echo '<tr class="filas">';
                echo "<td>"; echo $row->id; echo "</td>";
                echo "<td>"; echo $row->nombre; echo "</td>";
                echo "<td><a href=" .base_url().'index.php/idioma/editar/'.$row->id.">Editar </a> |";
                echo "<a href=" .base_url().'index.php/idioma/borrar/'.$row->id.">   Eliminar </a></td>";
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
    
    <a href="<?php echo base_url().'index.php/idioma' ?>"><button class="action-button"  >Regresar</button></a>
    </div>
</body>
</html>