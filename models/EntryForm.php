<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2015
 * Time: 19:43
 */

namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $age;

    public function rules(){
        return [
            [['name','email', 'age'], 'required'],
            ['email','email'],
            ['age', 'integer']
        ];
    }

}