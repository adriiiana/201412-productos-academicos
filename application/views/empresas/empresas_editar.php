<?=  form_open("/empresas/actualizar/".$id) ?>
<?php
  
  $nombre = array(
    'name' => 'nombre',
    'value' => $empresa->result()[0]->nombre
  );
/********************************************/

  $giro = array(
    'name' => 'giro',
    'value' => $empresa->result()[0]->giro_id
  );
  $giro_option = array(
    '1' => 'Giro1',
    '2' => 'Giro2',
    '3' => 'Giro3'
  );
  $giro_selected = array(
    'value' => $empresa->result()[0]->giro_id
  );
 
/********************************************/

  $tamanio = array(
    'name' => 'tamanio',
  );
  $tamanio_option = array(
    '1' => 'Micro',
    '2' => 'Pequena',
    '3' => 'Mediana',
    '4' => 'Grande',
    '5' => 'Muy Grande'
  );
  $tamanio_selected = array(
    'value' => $empresa->result()[0]->tamanio
  );
 
/********************************************/

  $descripcion = array(
    'value' => $empresa->result()[0]->descripcion,
    'name' => 'descripcion',
    'cols' => '20',
    'rows' => '5'
  );
 
/********************************************/

  $pais = array(
    'name' => 'pais'
  );
  $pais_option = array(
    '0' => 'pais0',
    '1' => 'pais1',
    '2' => 'pais2',
    '3' => 'pais3'
  );
  $pais_selected = array(
    'value' => $empresa->result()[0]->pais_id,
  );

/********************************************/

  $estado = array(
    'value' => $empresa->result()[0]->estado_id,
    'name' => 'estado'
  );
  $estado_option = array(
    '0' => 'edo0',
    '1' => 'edo1',
    '2' => 'edo2',
    '3' => 'edo3'
  );
  $estado_selected = array(
    'value' => $empresa->result()[0]->estado_id,
  );
 
/********************************************/

  $ciudad = array(
    'name' => 'ciudad'
  );
  $ciudad_option = array(
    '0' => 'ciudad0',
    '1' => 'ciudad1',
    '2' => 'ciudad2',
    '3' => 'ciudad'
  );
  $ciudad_selected = array(
    'value' => $empresa->result()[0]->ciudad_id,
  );
 
?>

<table>
  <thead>
    <tr>
      <th>Editar Empresa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><label>Nombre:</label></td>
      <td><?= form_input($nombre)?></td>
    </tr>

    <tr>
      <td><label>Giro:</label></td>
      <td><?= form_multiselect($giro,$giro_option,$giro_selected)?></td>
    </tr>


    <tr>
      <td><label>Tama&ntilde;o:</label></td>
      <td><?= form_multiselect($tamanio,$tamanio_option,$tamanio_selected)?></td>
    </tr>

    <tr>
      <td><label>Descripci&oacute;n:</label></td>
      <td><?= form_textarea($descripcion)?></td>
    </tr>

    <tr>
      <td><label>Pais:</label></td>
      <td><?= form_multiselect($pais,$pais_option,$pais_selected)?></td>
    </tr>

    <tr>
      <td><label>Estado:</label></td>
      <td><?= form_multiselect($estado,$estado_option,$estado_selected)?></td>
    </tr>

    <tr>
      <td><label>Ciudad:</label></td>
      <td><?= form_multiselect($ciudad,$ciudad_option,$ciudad_selected)?></td>
    </tr>


  </tbody>
</table>


<label>
  
  
</label>


<?= form_submit('','actualizar')?>
<?= form_close()?>

<?= form_open('empresas/')?>
<?= form_submit('','Cancelar') ?>
<?= form_close() ?> 

</body>
</html>



