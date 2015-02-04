<html>
<head>
      <title>MODIFICAR SALARIOS EGRESADOS</title>
    <link href="http://localhost/SisEgresa/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/SisEgresa/js/funciones.js"></script>
   
    <script>
    
    
    </script>
    
    
</head> 
<body>

    
    
    <a href="<?php echo base_url().'index.php/salarios/ver' ?>">VerTabla</a>
    
     <form id="inicio" action="<?php echo base_url()?>index.php/salarios/modifica/<?php echo$id ?>"  method="post">
        
        <fieldset>
        <h2 class="titulo">Modificar Salario</h2>
        <label>ID</label>
         <span id="msgIdioma"></span>
        <input type="text" value="<?php echo $id  ?>" name="id" readonly="readonly"/></br>
         <label>Puesto</label>
        <input type="text" placeholder="<?php echo $puesto_id  ?>" name="puesto" autofocus id="puesto"/></br>
        <label>Experiencia</label>
        <input type="text" placeholder="<?php echo $experiencia?>" name="experie" id="experie"/></br>
        <label>MontoMin</label>
        <input type="text" placeholder="<?php echo $MMin ?>" name="MMin" id="MMin"/></br>
        <label>MontoMax</label>
        <input type="text" placeholder="<?php echo $MMax ?>" name="MMax" id="MMax"/></br>
        <input type="submit" value="Editar" name="submit_reg" class="action-button"/>
        </fieldset>
    </form>

</body>
    
</html>