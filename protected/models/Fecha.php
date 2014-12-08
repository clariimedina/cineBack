<?php
class Fecha extends CActiveRecord
{
    public $id_fecha;
    public $fecha;
    public $horarios;

    public function tableName()
    {
        return 'fecha';
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public static function getFechasSala($id_sala){
         $criteria = new CDbCriteria;
            $criteria->select = 't.id_fecha,t.fecha';
            $criteria->join ='INNER JOIN Salas ON t.id_sala = Salas.id_sala';
            $criteria->condition = 'Salas.id_sala = :value';
            $criteria->params = array(":value" => $id_sala);

            $respuestas = Fecha::model()->findAll($criteria);

             foreach ($respuestas as $respuesta) {
                $respuesta['horarios'] = Horario::model()->getHorarioFecha($respuesta['id_fecha']);
            }
            return $respuestas;

    }
}

