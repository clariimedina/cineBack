
<?php

define("APIKEY", "pruebapikey");

class ApiController extends Controller
{
	public function actionIndex() {
		$this->result(array("status" => "ON", "name" => "REST API MovieTheater"));
	}

/**
 Acceso Aplicaciones (Seguridad) 
 */
	private function headers() {
		header('Access-Control-Allow-Origin:*');
    	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    	header('Access-Control-Allow-Headers: Content-Type, apikey');
	}

/**
 ACTIONS PARA OBTENER LAS CIUDADES Y LOS COMPLEJOS
*/
 	private function result($result) {
		echo json_encode($result);
	}
	
	public function actionCiudad(){
		$this->headers();

		$method = $_SERVER['REQUEST_METHOD'];
		if($method == 'GET'){
			$ciudad = $_GET['ciudad'];
			$complejos = Ciudad::model()->getComplejos($ciudad);
			$this->result(array("success"=>true,"complejos"=>$complejos));
		}
		else if ($method == "POST") {
			$request = file_get_contents('php://input'); //lee los datos de la peticion POST solicitada
			$request = json_decode($request); // decodifica a json
			$response = Ciudad::model()->setCiudad($request); // llamada a setGanado y manda un objeto a insertar
			$this->result(array("success" => true, "message" => "Se guardó correctamente"));
		}
		else{
			$this->result(array("success" => false, "message" => "No se encontró el recurso"));
		}
	}


}