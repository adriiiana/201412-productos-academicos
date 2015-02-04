
		<h1 style="color:blue;">Bienvenido usuario</h1>

		<!--
		librerias
		<?= $mi_menu ?> -->
		
		<?= form_open('/main_controller/agregar')?>
		<?= form_submit('','Agregar') ?>
		<?= form_close() ?>
		<br>

		<?= form_open('/main_controller/lista_tabla')?>
		<?= form_submit('','Editar') ?>
		<?= form_close() ?>

	</body>
</html>