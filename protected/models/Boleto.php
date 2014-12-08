<?php

class Boleto extends CActiveRecord
{
	public $folio=1;
	public $horario;
	public $pelicula;
	public $numsala;
	public $id_asiento;
    public $id_sala;
    public $id_venta;
    public $tipoSala;


	public function tableName()
	{
    	return 'Boleto';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function crearBoleto($horario,$pelicula,$numSala,$tipoSala,$asientos) {
        $Boleto = new Boleto;
        $Boleto->folio++;
        $Boleto->horario = $horario;
        $Boleto->pelicula = $pelicula;
        $Boleto->sala = $numSala;
        $Boleto->tipoSala = $tipoSala;

        return $Boleto;
    }
}

