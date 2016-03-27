<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fu_insititution".
 *
 * @property integer $id
 * @property string $name
 * @property string $describe
 * @property string $news
 * @property string $lastmodified
 * @property string $author
 */
class FuInsititution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fu_insititution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'describe', 'news', 'author'], 'required'],
            [['lastmodified'], 'safe'],
            [['name', 'describe', 'news', 'author'], 'string', 'max' => 128]
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
            'describe' => 'Describe',
            'news' => 'News',
            'lastmodified' => 'Lastmodified',
            'author' => 'Author',
        ];
    }
}
