<?php
class Ciudades extends CActiveRecord
{
    public $id_ciudad;
    public $nombre;
    public function tableName()
    {
        return 'Ciudades';
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function getComplejos($ciudad){
        return Complejos::model()->getComplejosporCiudad($ciudad);
        
    }
}