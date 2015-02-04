$(document).ready(function(){
    $('#IdiomaE').focusout( function(){
        if( $("#IdiomaE").val().length == 0)
        {
            $("#msgIdioma").html("<span style='color:#0f0'>Debe ingresar un nombre</span>");
        }
        else{
        
            $.ajax({
                type:"POST",
                url:"comprobar_idioma",
                data: "IdiomaE="+$("#IdiomaE").val(),
                beforeSend:function(){
                    $("#msgIdioma").html('<span>Verificando...</span>');
                },
                success: function(respuesta){
                    if(respuesta == '<div style="display:none">1</div>')
                        $("#msgIdioma").html("<span style='color:#0f0'>Ya existe ese idioma</span>");
                     else
                    $("#msgIdioma").html('<span style="color:#f00">Ya existe</span>');
                }
               
            
            });
            return false;
        }
    });            

});


$(document).ready(function(){
    $('#puesto').focusout( function(){
        if( $("#puesto").val().length == 0)
        {
            $("#msgIdioma").html("<span style='color:#f00'>Debe ingresar un puesto</span>");
        }      
});
});

$(document).ready(function(){
    $('#experie').focusout( function(){
        if( $("#experie").val().length == 0)
        {
            $("#msgIdioma").html("<span style='color:#f00'>Debe ingresar un numero experiencia</span>");
        }      
});
});

$(document).ready(function(){
    $('#MMin').focusout( function(){
        if( $("#MMin").val().length == 0)
        {
            $("#msgIdioma").html("<span style='color:#f00'>Debe ingresar un monto minimo</span>");
        }      
});
});

$(document).ready(function(){
    $('#MMax').focusout( function(){
        if( $("#MMax").val().length == 0)
        {
            $("#msgIdioma").html("<span style='color:#f00'>Debe ingresar un monto maximo</span>");
        }      
});
});
