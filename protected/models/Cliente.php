<?php

class Cliente extends CActiveRecord
{
	public $id;
	public $nombre;
	public $apellidoP;
	public $apellidoM;
	public $email;
	public $tel;
	public $tarjeta;
	public $tipoTarjeta;


	public function tableName()
	{
    	return 'Cliente';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

   	public static function guardarCliente() {
    	
    }
    public static function obtieneCliente() {
    	
    }

}
