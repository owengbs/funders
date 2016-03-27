<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fu_case".
 *
 * @property integer $id
 * @property integer $companyId
 * @property integer $phaseId
 * @property integer $amount
 * @property integer $institutionId
 * @property string $comment
 * @property string $date
 * @property string $lastmodified
 * @property string $author
 */
class FuCase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fu_case';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['companyId', 'phaseId', 'amount', 'institutionId', 'comment', 'author'], 'required'],
            [['companyId', 'phaseId', 'amount', 'institutionId'], 'integer'],
            [['date', 'lastmodified'], 'safe'],
            [['comment', 'author'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'companyId' => 'Company ID',
            'phaseId' => 'Phase ID',
            'amount' => 'Amount',
            'institutionId' => 'Institution ID',
            'comment' => 'Comment',
            'date' => 'Date',
            'lastmodified' => 'Lastmodified',
            'author' => 'Author',
        ];
    }
}
