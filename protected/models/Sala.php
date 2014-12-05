<?php

class Sala extends CActiveRecord
{
	public $id_sala;
	public $numSala;
	public $tipoSala;	

	public function tableName()
	{
    	return 'Salas';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public static function muestraAsientosDisponibles($numSala, $tipoSala) {
		$asientos = new Asiento::model()->consultarAsientosPorSala($numSala);
		return (array("asientos"=>$asientos));	  

	}
	


}
