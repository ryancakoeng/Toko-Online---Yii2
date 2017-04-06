<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

/**
*Contoh EntryForm
*/
class EntryForm extends Model
{
	public $name;
	public $email;
	
	public function rules()
	{
		return [
			//name, email are required
			[['name','email'],'required'],
			// email has to be a valid email address
			['email','email'],
		];
		
		/*
		$model = new EntryForm();
		$model ->name = 'Qiang';
		$model ->email = 'bad';
		if ($model->validate()){
			//Good!
		}else{
			//Failure!
			//Use $model->getErrors()
		}*/
	}
}