<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fu_project".
 *
 * @property integer $id
 * @property string $name
 * @property integer $companyId
 * @property integer $industryId
 * @property string $meettime
 * @property string $signtime
 * @property integer $amount
 * @property integer $estimatevalue
 * @property string $news
 * @property string $lastmodified
 * @property string $author
 */
class FuProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fu_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'companyId', 'industryId', 'amount', 'estimatevalue', 'news', 'author'], 'required'],
            [['companyId', 'industryId', 'amount', 'estimatevalue'], 'integer'],
            [['meettime', 'signtime', 'lastmodified'], 'safe'],
            [['name', 'news', 'author'], 'string', 'max' => 128]
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
            'companyId' => 'Company ID',
            'industryId' => 'Industry ID',
            'meettime' => 'Meettime',
            'signtime' => 'Signtime',
            'amount' => 'Amount',
            'estimatevalue' => 'Estimatevalue',
            'news' => 'News',
            'lastmodified' => 'Lastmodified',
            'author' => 'Author',
        ];
    }
    
    public function getFuCompany()
    {
        return $this->hasOne(FuCompany::className(),['id'=>'companyId']);
    }
}
