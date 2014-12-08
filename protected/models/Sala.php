<?php

class Sala extends CActiveRecord
{
	public $id_sala;
	public $numSala;
	public $tipoSala;
	public $peliculas;
	public $fechas;	

	public function tableName()
	{
    	return 'Salas';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public static function muestraAsientosDisponibles($numSala, $tipoSala) {
		$asientos = Asiento::model()->consultarAsientosPorSala($numSala);
		return (array("asientos"=>$asientos));	  

	}
	
	public static function getSalas ($id){
		$criteria = new CDbCriteria;
		 $criteria->select = '*';
         $criteria->join ='INNER JOIN Complejos ON t.id_complejos = Complejos.id_complejo';
         $criteria->condition = 'Complejos.id_complejo= :value';
         $criteria->params = array(":value" => $id);
         $resultados = Sala::model()->findAll($criteria);
             foreach ($resultados as $resultado) {
                $resultado['peliculas'] = peliculas::model()->getPeliculasById($resultado['numSala']);
            }
            return $resultados;
	}

	public static function getFechas($id_sala) {
		 $query = new CDbCriteria(array( // consultas por tipo
			"condition" => "id_sala = :id_sala",
			"params" => array(':id_sala' => $id_sala)
		));	

         $resultados = Sala::model()->findAll($query);
             foreach ($resultados as $resultado) {
                $resultado['peliculas'] = peliculas::model()->getPeliculasById($resultado['numSala']);
                $resultado['fechas'] = Fecha::model()->getFechasSala($resultado['id_sala']);
            }
            return $resultados;

	}
	


}
