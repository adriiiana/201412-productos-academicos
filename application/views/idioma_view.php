<html>
<head>
      <title>IDIOMA EGRESADOS</title>
        <link href="http://localhost/SisEgresa/css/style.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/SisEgresa/js/funciones.js"></script>
   
    <script language="JavaScript" type="text/javascript">
    
        function cargar()
        {
            location.href="<?php echo base_url().'index.php/idioma/ver'?>";
        }
        
        function validar()
        {
            if(document.form_idioma.IdiomaE.value.length==0)
            {
                alert("Tiene que ingresar un Nombre");
                document.form_idioma.IdiomaE.focus()
                return 0;
            }
           document.form_idioma.submit(); 
        }
        
    </script>
    </head>    
<body>

    
    
    
    
    <form id="inicio" name="form_idioma"  method="post" action="<?php echo base_url();?>index.php/idioma/agregar" >
        
       <fieldset> 
        <h2 class="titulo">Agregar Idioma</h2>
           <span id="msgIdioma"></span>
          <input type="text" placeholder="Nuevo Idioma" name="IdiomaE" id="IdiomaE" class="inputNormal" autofocus/></br> </td>
            
        <input type="submit" value="Agregar" name="submit_reg" class="action-button" onclick="validar()"  />
        <a href="<?php echo base_url().'index.php/idioma/ver' ?>" onclick="cargar();return false"> <button class="action-button"> VerTabla</button></a>
       </fieldset> 
    </form>
 
    
</body>
    
</html>