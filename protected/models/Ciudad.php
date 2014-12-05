<?php

class Ciudad extends CActiveRecord
{
	public $id_ciudad;
	public $nombre;
	public $complejo;


	public function tableName()
	{
    	return 'ciudades';
	}

	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function getComplejos($nombre){

    	$query = new CDbCriteria(array( // consultas por tipo
			"condition" => "nombre = :nombre",
			"params" => array(':nombre' => $nombre)
		));

		return $this->findAll($query);
    }
    public function setCiudad($request) {
		$ciudad = new Ciudad;
		$ciudad->id_ciudad = $request->id_ciudad;
		$ciudad->nombre = $request->nombre;
		$ciudad->complejo = $request->complejo;

		return $ciudad->save();
	}


}
