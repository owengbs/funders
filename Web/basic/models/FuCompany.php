<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fu_company".
 *
 * @property integer $id
 * @property string $name
 * @property integer $industryId
 */
class FuCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fu_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'industryId'], 'required'],
            [['industryId'], 'integer'],
            [['name'], 'string', 'max' => 128]
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
            'industryId' => 'Industry ID',
        ];
    }
    
    public function getFuIndustry()
    {
        return $this->hasOne(FuIndustry::className(),['id'=>'industryId']);
    }
}
