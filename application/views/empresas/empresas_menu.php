<?php



  $empresa_editar = '/empresas/editar/';
  $empresa_borrar = '/empresas/borrar/';
  $menu = '../ ';
  $empresa_nuevo = '/empresas/nuevo/';

     
echo'<a href='.$menu.'>Menu Principal</a><br><br>';

  if($empresa){

echo'  
  <table>
  	<thead>
  		<tr>
  			<th>Empresas</th>
  			<th>Giro</th>
  			<th>Tama&ntilde;o</th>
  			<th>Descripci&oacute;n</th>
  		</tr>
  	</thead>
  	<tbody>';

  foreach($empresa->result() as $n_empresa) { ?>

<!--
    <ul>
    <li><a href="<?= $n_empresa->id; ?>"><?= $n_empresa->nombre;?></a></li>
    </ul>
-->

    <tr>
    <td><?= $n_empresa->nombre;?></a></td>
    
    <td><?= $n_empresa->giro_id;?></a></td>
    
    <td><?= $n_empresa->tamanio;?></a></td>

    <td><?= $n_empresa->descripcion;?></a></td>
    
    <td>
    <?= form_open($empresa_editar.$n_empresa->id)?>
		<?= form_submit('','Editar') ?>
		<?= form_close() ?>
	</td>

    <td>
    <?= form_open($empresa_borrar.$n_empresa->id)?>
		<?= form_submit('','Eliminar') ?>
		<?= form_close() ?>	
	</td>

    </tr>

    
<?php }
  }else{
      echo "<p> Sin Empresas</p>";
  }

?>

    <td>
    <?= form_open($empresa_nuevo)?>
	  <?= form_submit('','Agregar Empresa') ?>
	  <?= form_close() ?>	
    </td>

  	</tbody>

  </table>


 </body>

</html>

