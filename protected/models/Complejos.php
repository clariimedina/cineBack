<?php

class Complejos extends CActiveRecord
{
	public $id_complejo;
	public $nombre;
    public $numSalas;
    public $peliculas;


	public function tableName()
	{
    	return 'Complejos';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function getComplejosporCiudad($ciudad) {
        $criteria = new CDbCriteria;
            $criteria->select = 't.id_complejo,t.nombre,t.numSalas';
            $criteria->join ='INNER JOIN Ciudades ON t.id_ciudad = Ciudades.id_ciudad';
            $criteria->condition = 'Ciudades.nombre = :value';
            $criteria->params = array(":value" => $ciudad);
            $respuestas =Complejos::model()->findAll($criteria);
            foreach ($respuestas as $respuesta) {
                $respuesta['peliculas'] =Peliculas::model()->getPeliculas($respuesta['numSalas']);
            }
            return $respuestas;
    }
    public function relations() {
        return array(
            'Ciudades' => array(self::BELONGS_TO, 'Ciudades', 'id_ciudad')
        );
    }


}
