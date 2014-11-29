<?php

class Boleto extends CActiveRecord
{
	public $folio;
	public $horario;
	public $pelicula;
	public $sala;
	public $asiento;


	public function tableName()
	{
    	return 'Boleto';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function colocar() {

    }
    public static function quitar() {
    	
    }
}

