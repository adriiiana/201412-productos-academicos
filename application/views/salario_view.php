<html>
<head>
      <title>SALARIO EGRESADOS</title>
    <link href="http://localhost/SisEgresa/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/SisEgresa/js/funciones.js"></script>
   
    
     <script language="JavaScript" type="text/javascript">
        window.onload=function(){
            document.form_salario.puesto.focus();
            document.form_salario.addEventListener('submit',validar);
        }

        function cargar()
        {
            location.href="<?php echo base_url().'index.php/salarios/ver'?>";
        }
        
        function validar(evObject)
        {
            evObject.preventDefault();
            var ok=true;
            var Mmin=document.getElementById("MMin");
            var Mmax=document.getElementById("MMax");
            var expe =document.getElementById("experie");
            var pues=document.getElementById("puesto");

            if(pues.value.length==0)
            {
                alert("Ingresa un puesto");
                pues.focus();
                ok=false;
            }
            else if(isNaN(Mmin.value) || isNaN(Mmax.value) || isNaN(expe.value))
            {
                alert("Ingresa un numero");
                Mmin.focus();
              
                ok=false;
            }

            /*var formu = document.form_salario;

            for(var i=0;i<formu.length;i++)
            {
                if(formu[i].value ==null || formu[i].value.length==0){
                    alert(formu[i].name+ 'no puede estar vacio o no es un numero');
                    ok=false;
                }
            }*/


           if(ok==true){ 
           document.form_salario.submit(); 
        }}
    </script>
</head>    
<body>

    
    
    
    
    <form id="inicio" name="form_salario" action="<?php echo base_url().'index.php/salarios/agregar' ?>" method="post">
        
        <fieldset>
        <h2 class="titulo">Agregar Salario</h2>
        <span id="msgIdioma"></span>
        <input type="text" placeholder="Puesto" name="puesto" id="puesto" autofocus/></br>
        <span id="msgIdioma"></span>
        <input type="text" placeholder="Experiencia" name="experie" id="experie"/></br>
        <span id="msgIdioma"></span>
        <input type="text" placeholder="MontoMin" name="MMin" id="MMin"/></br>
        <span id="msgIdioma"></span>
        <input type="text" placeholder="MontoMax" name="MMax" id="MMax"/></br>
        <input type="submit" value="Agregar" name="submit_reg" class="action-button" />
        <a href="<?php echo base_url().'index.php/salarios/ver' ?>" onclick="cargar();return false"> <button class="action-button"> VerTabla</button></a>
        </fieldset>
    </form>

</body>
    
</html>