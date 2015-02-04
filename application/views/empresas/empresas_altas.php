<?= form_open('/empresas/recibirDatos')?>
<?php
   

  $nombre = array(
    'name' => 'nombre',
    'placeholder' => 'nombre de la empresa'
  );
/********************************************/

  $giro = array(
    'name' => 'giro'
  );
  $giro_option = array(
    '1' => 'Giro1',
    '2' => 'Giro2',
    '3' => 'Giro3'
  );
  $giro_selected = array(
    '1' => 'Giro1'
  );

/********************************************/

  $tamanio = array(
    'name' => 'tamanio'
  );
  $tamanio_option = array(
    '1' => 'Micro',
    '2' => 'Pequena',
    '3' => 'Mediana',
    '4' => 'Grande',
    '5' => 'Muy Grande'
  );
  $tamanio_selected = array(
    '5' => 'Muy Grande'
  );

/********************************************/

  $descripcion = array(
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
    '0' => 'pais0'
  );

/********************************************/

  $estado = array(
    'name' => 'estado'
  );
  $estado_option = array(
    '0' => 'edo0',
    '1' => 'edo1',
    '2' => 'edo2',
    '3' => 'edo3'
  );
  $estado_selected = array(
    '0' => 'edo0'
  );

/********************************************/

  $ciudad = array(
    'name' => 'ciudad'
  );
  $ciudad_option = array(
    '0' => 'ciudad0',
    '1' => 'ciudad1',
    '2' => 'ciudad2',
    '3' => 'ciudad3'
  );
  $ciudad_selected = array(
    '0' => 'ciudad0'
  );

?>

<table>
  <thead>
    <tr>
      <th>Nueva Empresa</th>
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




<?= form_submit('','Guardar')?>
<?= form_close()?>

<?= form_open('empresas/')?>
<?= form_submit('','Cancelar') ?>
<?= form_close() ?> 

</body>
</html>



