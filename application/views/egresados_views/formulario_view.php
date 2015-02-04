<?= form_open('/main_controller/recibirDatos') ?>
<?php
	$datos['ciudad'] = array('name' => 'ciudad');
	$datos['estado'] = array('name' => 'estado');
	$datos['pais'] = array('name' => 'pais');
?>
	<div style="width:240px;background-color:grey;padding:10px;text-align:center;">
		<table>
			<tr>
				<td>
					<label>
						Ciudad:
					</label> 
				</td>
				<td>
					<?= form_input($datos['ciudad'])?>
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Estado:
					</label>
				</td>
				<td>
					<?= form_input($datos['estado'])?>
				</td>
			</tr>	
			<tr>
				<td>
					<label>
						Pais:
					</label>
				</td>
				<td>
					<?= form_input($datos['pais'])?>
				</td>
			</tr>
		</table>
		<?= form_submit('','Agregar') ?>
		<?= form_close() ?>
		
		<?= form_open('/main_controller/index')?>
		<?= form_submit('','Cancelar') ?>
		<?= form_close() ?>

	</div>
	</body>
</html>