<?php

class Venta extends CActiveRecord
{
	public $id;
	public $numBoletos;
	public $tipoVenta;
	public $boletos [] = new Boleto();
	public $pago = new Pago();
	public $cliente = new Cliente();


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
		$venta->numBoletos = $numBoletos;
		$venta->tipoVenta = $tipoVenta;
		$sala = Asiento::model()-> consultarAsientosPorSala($numSala, $tipoSala);
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

