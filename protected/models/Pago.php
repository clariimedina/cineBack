<?php

class Pago extends CActiveRecord
{
	public $id;
	public $codReserva;
	public $deudaPagada;
	public $verificacion = new Verificacion();


	public function tableName()
	{
    	return 'Pago';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public static function calcularTotal() {
    	
    }
    public static function muestraPago() {
    	
    }
    public static function liquidar() {
    	
    }
    public static function verifcarCredito() {
    	
    }
    public static function crearComprobanteCompra() {
    	
    }
    public static function crearComprobanteReserva() {
    	
    }


}
