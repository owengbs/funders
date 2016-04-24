<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fu_contacts".
 *
 * @property string $name
 * @property string $score
 * @property string $en_name
 * @property string $phone1
 * @property string $phone2
 * @property string $telphone1
 * @property string $telphone2
 * @property string $telphone3
 * @property string $email1
 * @property string $email2
 * @property string $im
 * @property string $weixin
 * @property string $school
 * @property string $birthdate
 * @property string $comment
 * @property string $position1
 * @property string $position2
 * @property string $position3
 * @property string $position4
 * @property integer $industryId
 * @property string $company1
 * @property string $company2
 * @property string $department1
 * @property string $department2
 * @property string $affiliatedcompany1
 * @property string $affiliatedcompany2
 * @property string $address1
 * @property string $address2
 * @property string $website
 * @property string $fax
 * @property integer $groupId
 * @property string $createtime
 * @property string $lastmodified
 * @property integer $id
 */
class FuContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fu_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email1'], 'required'],
            [['score', 'weixin'], 'string'],
            [['industryId', 'groupId'], 'integer'],
            [['createtime', 'lastmodified'], 'safe'],
            [['name', 'en_name', 'email1', 'email2', 'im', 'school', 'birthdate', 'comment', 'position1', 'position2', 'position3', 'position4', 'company1', 'company2', 'department1', 'department2', 'affiliatedcompany1', 'affiliatedcompany2', 'address1', 'address2', 'website', 'fax'], 'string', 'max' => 128],
            [['phone1', 'phone2', 'telphone1', 'telphone2', 'telphone3'], 'string', 'max' => 20],
            [['phone1', 'name'], 'unique', 'targetAttribute' => ['phone1', 'name'], 'message' => 'The combination of Name and Phone1 has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'score' => 'Score',
            'en_name' => 'En Name',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'telphone1' => 'Telphone1',
            'telphone2' => 'Telphone2',
            'telphone3' => 'Telphone3',
            'email1' => 'Email1',
            'email2' => 'Email2',
            'im' => 'Im',
            'weixin' => 'Weixin',
            'school' => 'School',
            'birthdate' => 'Birthdate',
            'comment' => 'Comment',
            'position1' => 'Position1',
            'position2' => 'Position2',
            'position3' => 'Position3',
            'position4' => 'Position4',
            'industryId' => 'Industry ID',
            'company1' => 'Company1',
            'company2' => 'Company2',
            'department1' => 'Department1',
            'department2' => 'Department2',
            'affiliatedcompany1' => 'Affiliatedcompany1',
            'affiliatedcompany2' => 'Affiliatedcompany2',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'website' => 'Website',
            'fax' => 'Fax',
            'groupId' => 'Group ID',
            'createtime' => 'Createtime',
            'lastmodified' => 'Lastmodified',
            'id' => 'ID',
        ];
    }
    
    public function getFuInsititution()
    {
        return $this->hasOne(FuInsititution::className(),['name'=>'company1']);
    }
}
