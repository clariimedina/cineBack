<?php

class Asiento extends CActiveRecord
{
	public $id_asiento;
	public $disponibilidad;

	public function tableName()
	{
    	return 'Asientos';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function consultarAsientosPorSala($numSala, $tipoSala) {
        $criteria = new CDbCriteria;
        $criteria->select = 't.id_asiento,t.disponibilidad';
        $criteria->join ='INNER JOIN salas ON t.id_sala = salas.id_sala';
        $criteria->condition = 'salas.id_sala = :value';
        $criteria->params = array(":value" => $numSala);
        return Asiento::model()->findAll($criteria);
    }
    public function relations() {
        return array(
            'Sala' => array(self::BELONGS_TO, 'Salas', 'id_sala')
        );
    }

    public static function apartar() {

    }
    public static function liberar() {
    	
    }


}
