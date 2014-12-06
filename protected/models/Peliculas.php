<?php

class Peliculas extends CActiveRecord
{
	public $id_pelicula;
	public $titulo;
	public $actores;
	public $director;
	public $pais;
	public $año;
	public $clasificacion;
	public $duracion;
	public $genero;
	public $poster;
	public $trailer;
	public $sipnosis;


	public function tableName()
	{
    	return 'Peliculas';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function getPeliculas($numSala) {
        $criteria = new CDbCriteria;
            $criteria->select = 'id_pelicula,titulo';
            $criteria->limit = 5;
            $criteria->params = array(":value" => $numSala);


            return Peliculas::model()->findAll($criteria);
    }



}
