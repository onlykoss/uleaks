<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $login
 * @property string $password
 * @property string $date_reg
 * @property string $date_born
 * @property integer $rate
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'date_reg', 'rate'], 'required'],
            [['date_reg', 'date_born'], 'safe'],
            [['rate'], 'integer'],
            [['name', 'surname', 'login', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'login' => 'Login',
            'password' => 'Password',
            'date_reg' => 'Date Reg',
            'date_born' => 'Date Born',
            'rate' => 'Rate',
        ];
    }
}
