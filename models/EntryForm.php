<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class EntryForm extends Model
{
    public $email;
    public $name;

    public function rules()
    {
        return [
            [['email', 'name'], 'required'],
            ['email', 'email']
        ];
    }


}
