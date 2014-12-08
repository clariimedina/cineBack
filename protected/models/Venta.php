<?php

class Venta extends CActiveRecord
{
	public $id=1;
	public $numBoletos;
	public $tipoVenta;

	public function tableName()
	{
    	return 'ventas';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function crearNuevaVenta($numBoletos,$horario,$pelicula,$numSala,$tipoSala,$tipoVenta){
    	$venta = new Venta;
    	$venta->id++;
		$venta->numBoletos = $numBoletos;
		$venta->tipoVenta = $tipoVenta;
		$sala = Sala::model()-> consultarSala($numSala, $tipoSala);
		return (array("Salas"=>$sala));
    }
    public static function registrarVenta() {


	}
	public static function crearBoletos() {

	}
	public static function colocarEnBoleto() {
		
	}
	public static function quitarEnBoleto() {
		
	}
	public static function nuevoCliente() {
		
	}
	public static function crearPago() {
		
	}
	public static function realizarCompraReserva() {
		
	}
}

