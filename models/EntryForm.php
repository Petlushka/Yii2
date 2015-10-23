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

    public function rules(){
        return [
            [['name','email'], 'required'],
            ['email','email']
        ];
    }

}