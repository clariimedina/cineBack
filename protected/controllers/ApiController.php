
<?php

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
		else{
			$this->result(array("success" => false, "message" => "No se encontró el recurso"));
		}
	}
/**
 METODO PARA INICIAR UNA NUEVA VENTA 
*/
	public function actionIniciaNuevaVenta() {
			$this->headers();
			$numBoletos = $_GET['numBoletos'];
			$horario = $_GET['horario'];
			$pelicula = $_GET['pelicula'];
			$numSala = $_GET['numSala'];
			$tipoSala = $_GET['tipoSala'];
			$tipoVenta = $_GET['tipoVenta'];
			$venta = Venta::model()->crearNuevaVenta($numBoletos,$horario,$pelicula,$numSala,$tipoSala,$tipoVenta);
			$this->result(array("success" => true, "venta" => $venta));
	}


}