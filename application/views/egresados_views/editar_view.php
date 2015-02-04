<?= form_open("main_controller/actualizar") ?>
<?php
	$datos['paisN'] = array(
		'name' => 'nombre',
		'value' => $pais->result()[0]->nombre
		);
	$datos['ciudadN'] = array(
		'name' => 'nombre',
		'value' => $ciudad->result()[0]->nombre
		);
	$datos['estadoN']= array(
		'name' => 'nombre',
		'value' => $estado->result()[0]->nombre
		);
	
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
					<?= form_input($datos['ciudadN'])?>
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Estado:
					</label>
				</td>
				<td>
					<?= form_input($datos['estadoN'])?>
				</td>
			</tr>	
			<tr>
				<td>
					<label>
						Pais:
					</label>
				</td>
				<td>
					<?= form_input($datos['paisN'])?>
				</td>
			</tr>
		</table>

		<?= form_submit('','Actualizar') ?>
		<?= form_hidden('id',$ciudad->result()[0]->id)?>
		<?= form_close() ?>
		
		<?= form_open('/main_controller/index')?>
		<?= form_submit('','Cancelar') ?>
		<?= form_close() ?>
	</div>
	</body>
</html>