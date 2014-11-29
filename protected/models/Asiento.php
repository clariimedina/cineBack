<?php

class Asiento extends CActiveRecord
{
	public $numero;
	public $disponibilidad;


	public function tableName()
	{
    	return 'Asiento';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public static function apartar() {

    }
    public static function liberar() {
    	
    }


}
