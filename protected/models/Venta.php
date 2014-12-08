<?php

class Venta extends CActiveRecord
{
	public $id_venta=1;
	public $numBoletos;
	public $tipoVenta;
    public $horario;
    public $pelicula;
    public $numSala;
    public $tipoSala;
    public $pago;

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
        $venta->horario = $horario;
		$venta->tipoVenta = $tipoVenta;
        $venta->pelicula = $pelicula;
        $venta->numSala = $numSala;
        $venta->tipoSala = $tipoSala;
        $venta->save();
		$sala = Sala::model()-> consultarSala($numSala, $tipoSala);
		return (array("Salas"=>$sala));
    }

    public static function obtieneAsientos($asientos) {
        $boleto = Boleto::model()->crearBoleto($id_venta,$asientos);

        return $venta;
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

