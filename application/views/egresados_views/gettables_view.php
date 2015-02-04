	
	<table style="border-colapse:colapse;">
		<thead>
    		<tr>
      			<th style="color:blue;font-size:30px;">Pais</th>
      			<th style="color:blue;font-size:30px;">Estado</th>
      			<th style="color:blue;font-size:30px;">Ciudad</th>
    		</tr>
  		</thead>
		<?php
		$j=$paises->num_rows();
		$pa = $paises->result();
		$cd = $ciudades->result();
		$edo = $estados->result();
		for($i=0;$i<$j;$i++){ ?>		
		<tr>
			<td>
				<ul>
					<li style="list-style:none;"><?= $pa[$i]->nombre; ?></li>
				</ul>
			</td>			
			<td>
				<ul>
					<li style="list-style:none;"><?= $edo[$i]->nombre; ?></li>
				</ul>
			</td>	
			<td>
				<ul>
					<li style="list-style:none;"><?= $cd[$i]->nombre;?></li>
				</ul>
			</td>
			<td>
				<ul>
					<li style="list-style:none;">
						<?= form_open('/main_controller/editar')?>
						<?= form_hidden('id',$cd[$i]->id)?>
						<?= form_submit('','Editar') ?>						
						<?= form_close() ?>

					</li>
				</ul>
			</td>
			<td>
				<ul>
					<li style="list-style:none;">
						<?= form_open('/main_controller/eliminar') ?>
						<?= form_hidden('id',$cd[$i]->id) ?>
						<?= form_submit('','eliminar') ?>						
						<?= form_close() ?>
					</li>
				</ul>
			</td>			
		</tr>
		<?php } ?>
	</table>
	<div style="width:650px;text-align:center;">
	
	<?= form_open('/main_controller/index') ?>
	<?= form_submit('','Menu Principal') ?>
	<?= form_close() ?>

		
	
	</div>
</body>
</html>