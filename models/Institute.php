<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institute".
 *
 * @property integer $id
 * @property string $institut_name
 * @property string $institut_abk
 * @property integer $standorte_ID
 *
 * @property Standorte $standorte
 * @property Leser[] $lesers
 */
class Institute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['institut_name', 'institut_abk', 'standorte_ID'], 'required'],
            [['standorte_ID'], 'integer'],
            [['institut_name', 'institut_abk'], 'string', 'max' => 45],
            [['standorte_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Standorte::className(), 'targetAttribute' => ['standorte_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institut_name' => 'Institut Name',
            'institut_abk' => 'Institut Abk',
            'standorte_ID' => 'Standorte  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStandorte()
    {
        return $this->hasOne(Standorte::className(), ['ID' => 'standorte_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLesers()
    {
        return $this->hasMany(Leser::className(), ['institute_id' => 'id']);
    }
}
