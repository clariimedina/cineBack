<?php

class Pelicula extends CActiveRecord
{
	public $id;
	public $titulo;
	public $Actores;
	public $Director;
	public $Pais;
	public $Año;
	public $Clasificacion;
	public $Duracion;
	public $Horarios;
	public $Genero;

	public function tableName()
	{
    	return 'Pelicula';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
