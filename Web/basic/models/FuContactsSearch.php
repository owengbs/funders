<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FuContacts;

/**
 * FuContactsSearch represents the model behind the search form about `app\models\FuContacts`.
 */
class FuContactsSearch extends FuContacts
{
    public $fuGroups;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'score', 'en_name', 'phone1', 'phone2', 'telphone1', 'telphone2', 'telphone3', 'email1', 'email2', 'im', 'weixin', 'school', 'birthdate', 'comment', 'position1', 'position2', 'position3', 'position4', 'company1', 'company2', 'department1', 'department2', 'affiliatedcompany1', 'affiliatedcompany2', 'address1', 'address2', 'website', 'fax', 'createtime', 'lastmodified'], 'safe'],
            [['industryId', 'groupId', 'id'], 'integer'],
            [['fuGroups'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FuContacts::find()
                ->joinWith(['fuInsititution', 'fuGroups']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'industryId' => $this->industryId,
            'groupId' => $this->groupId,
            'createtime' => $this->createtime,
            'lastmodified' => $this->lastmodified,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'fu_contacts.name', $this->name])
            ->andFilterWhere(['like', 'score', $this->score])
            ->andFilterWhere(['like', 'en_name', $this->en_name])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'telphone1', $this->telphone1])
            ->andFilterWhere(['like', 'telphone2', $this->telphone2])
            ->andFilterWhere(['like', 'telphone3', $this->telphone3])
            ->andFilterWhere(['like', 'email1', $this->email1])
            ->andFilterWhere(['like', 'email2', $this->email2])
            ->andFilterWhere(['like', 'im', $this->im])
            ->andFilterWhere(['like', 'weixin', $this->weixin])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'birthdate', $this->birthdate])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'position1', $this->position1])
            ->andFilterWhere(['like', 'position2', $this->position2])
            ->andFilterWhere(['like', 'position3', $this->position3])
            ->andFilterWhere(['like', 'position4', $this->position4])
            ->andFilterWhere(['like', 'company1', $this->company1])
            ->andFilterWhere(['like', 'company2', $this->company2])
            ->andFilterWhere(['like', 'department1', $this->department1])
            ->andFilterWhere(['like', 'department2', $this->department2])
            ->andFilterWhere(['like', 'affiliatedcompany1', $this->affiliatedcompany1])
            ->andFilterWhere(['like', 'affiliatedcompany2', $this->affiliatedcompany2])
            ->andFilterWhere(['like', 'address1', $this->address1])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'fu_groups.name', $this->fuGroups])
            ->andFilterWhere(['like', 'fax', $this->fax]);

        return $dataProvider;
    }
}
