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
    public static function consultarAsientosPorSala($numSala) {
        $criteria = new CDbCriteria;
<<<<<<< HEAD
            $criteria->select = 't.id_asiento,t.disponibilidad';
            $criteria->join ='INNER JOIN Salas ON t.id_sala = Salas.id_sala';
            $criteria->condition = 'Salas.id_sala = :value';
            $criteria->params = array(":value" => $numSala);
            return Asiento::model()->findAll($criteria);
=======
        $criteria->select = 't.id_asiento,t.disponibilidad';
        $criteria->join ='INNER JOIN Salas ON t.id_sala = Salas.id_sala';
        $criteria->condition = 'Salas.id_sala = :value';
        $criteria->params = array(":value" => $numSala);
        return Asiento::model()->findAll($criteria);
>>>>>>> 547be514b66d948822151a470534562b1fdf813d
    }
    public function relations() {
        return array(
            'Sala' => array(self::BELONGS_TO, 'Salas', 'id_sala')
        );
    }
    public function encontrarAsiento($id) {
        

        return Asiento::model()->findByPk($id);

    }
    public static function apartar() {
    }
    public static function liberar() {
        
    }
}
