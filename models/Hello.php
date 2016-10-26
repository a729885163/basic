<?php

namespace app\models;

use yii\db\ActiveRecord;

class Hello extends ActiveRecord
{
    public static function tableName()
    {
        return "hello";
    }
}