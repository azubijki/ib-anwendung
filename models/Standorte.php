<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "standorte".
 *
 * @property integer $ID
 * @property string $standort_name
 * @property string $siegel
 *
 * @property Institute[] $institutes
 */
class Standorte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'standorte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['standort_name', 'siegel'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'standort_name' => 'Standort Name',
            'siegel' => 'Siegel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitutes()
    {
        return $this->hasMany(Institute::className(), ['standorte_ID' => 'ID']);
    }
}
