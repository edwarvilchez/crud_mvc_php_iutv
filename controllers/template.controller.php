
<!--
Para que la información que está en el archivo template.php, pueda ser visible en el navegador, debemos incluirlo en index.php, mediante la carpeta controller. 
Para ello creamos un archivo llamado template.controller.php en dicha carpeta.
Posteriormente crearemos una clase llamada TemplateController y en esta clase, crearemos una función llamada ctrGetTemplate(), donde declararemos un función para vincular  estos archivos en index.php usando la función include
-->

<?php

	class TemplateController{

		public function ctrGetTemplate(){
			# code...
		#usamos la funcion include para vincular los arcihvos
			include('./views/template.php');
		}
	}

