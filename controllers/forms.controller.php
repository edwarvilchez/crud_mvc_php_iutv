<?php 

	class FormsController{

		# creamos la funcion publica ctrRegistro
		static public function ctrRegistro(){
			# ciclo if
			if(isset($_POST['registroName'])){
				return /*$_POST['registroName']."<br>".;
					   $_POST['registroEmail']."<br>".;
					   $_POST['registroPwd']."<br>";*/
					"OK";
			}
		}//cierre de la función		
	}//cierre de la clase 