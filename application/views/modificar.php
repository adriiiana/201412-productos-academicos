<html>
<head>
      <title>MODIFICAR IDIOMA EGRESADOS</title>
    <link href="http://localhost/SisEgresa/css/style.css" rel="stylesheet" type="text/css" />
    
    <script>
     function cargar()
        {
            location.href="<?php echo base_url().'index.php/idioma/ver'?>";
        }
        
        
        
    </script>
    
    
</head>    
<body>

    
    
    
    <form id="inicio" name="form_idioma" action="<?php echo base_url()?>index.php/idioma/modifica/<?php echo$id ?>"  method="post">
        
        
        <fieldset>
        <h2 class="titulo">Modificar Idioma</h2>
        <label>Id</label>
        <input type="text" value="<?php echo $id ?>" name="id" readonly="readonly"/>
        <label>New Idioma</label>
        <input type="text" placeholder="Idioma Nuevo" name="IdiomaE"  autofocus/></br>
        <input type="submit" value="Modificar" name="submit_reg" class="action-button" />
         
        </fieldset>
    </form>

</body>
    
</html>