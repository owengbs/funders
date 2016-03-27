<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fu_industry".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $name
 */
class FuIndustry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fu_industry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'name'], 'required'],
            [['pid'], 'integer'],
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
            'pid' => 'Pid',
            'name' => 'Name',
        ];
    }
}
