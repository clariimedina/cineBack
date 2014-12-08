<?php
class Horario extends CActiveRecord
{
    public $id_horario;
    public $horario;

    public function tableName()
    {
        return 'horario';
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public static function getHorarioFecha($id_fecha){
         $criteria = new CDbCriteria;
            $criteria->select = 't.id_horario,t.horario';
            $criteria->join ='INNER JOIN fecha ON t.id_fecha = fecha.id_fecha';
            $criteria->condition = 'fecha.id_fecha = :value';
            $criteria->params = array(":value" => $id_fecha);

            $respuestas = Horario::model()->findAll($criteria);

             
            return $respuestas;

    }
}

