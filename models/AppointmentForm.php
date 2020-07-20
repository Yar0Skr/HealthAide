<?php


namespace app\models;


use yii\base\Model;

class AppointmentForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            // тут определяются правила валидации
        ];
    }
}