<?php

class Verificacion extends CActiveRecord
{

	public function tableName()
	{
    	return 'Verificacion';
	}
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}