<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $vorname
 * @property string $nachname
 * @property string $username
 * @property string $pass
 * @property string $authkey
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface //IdentityInterface implementieren
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
            [['vorname', 'nachname', 'username', 'password', 'authkey'], 'required'],
            [['vorname', 'nachname', 'username', 'password'], 'string', 'max' => 32],
            [['authkey'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vorname' => 'Vorname',
            'nachname' => 'Nachname',
            'username' => 'Username',
            'password' => 'Pass',
            'authkey' => 'Authkey',
        ];
    }

    public function getAuthKey() {
        return $this->authkey;
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authkey) {
        return $this->authkey === $authkey;
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException();
    }
    
    public static function findByUsername($username)
    {
        return self::findOne(['username'=>$username]);
    }
    
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
