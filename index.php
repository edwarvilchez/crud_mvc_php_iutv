<!--
	Para poder usar la clase template.controller.php, en el archivo index.php debemos usar una función predefinida de PHP llamada require_once
	Para poder visualizar el contenido del archivo template.controller.php, debemos instanciar la clase del archivo template.php (el que está declarado en views)
	Luego para poder ejecutar cualquier método usamos el símbolo -> y el nombre del método
-->

<?php

	# vinculamos los archivos usando la función predeteminada require_once
	require_once('controllers/template.controller.php');
	require_once('controllers/forms.controller.php');

	# instanciamos la clase
	$template = new TemplateController();

	# ejecuto los métodos de la clase
	$template -> ctrGetTemplate();



