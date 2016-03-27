<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FuProject;
use app\models\FuCompany;
use app\models\FuIndustry;
/**
 * FuProjectSearch represents the model behind the search form about `app\models\FuProject`.
 */
class FuProjectSearch extends FuProject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'companyId', 'industryId', 'amount', 'estimatevalue'], 'integer'],
            [['name', 'meettime', 'signtime', 'news', 'lastmodified', 'author'], 'safe'],
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

    public function getCompanyIndustryNames()
    {
        $companymodel = FuCompany::find()->all();
        $industrymodel = FuIndustry::find()->all();
        $companynames = array();
        $industrynames = array();
        foreach($companymodel as $key=>$value){
            $companynames[$value->id] = $value->name;
        }
        foreach ($industrymodel as $key=>$value){
            $industrynames[$value->id] = $value->name;
        }
        return [$companynames, $industrynames];
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
        $query = FuProject::find()
                ->joinWith('fuCompany');
 
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
            'id' => $this->id,
            'companyId' => $this->companyId,
            'industryId' => $this->industryId,
            'meettime' => $this->meettime,
            'signtime' => $this->signtime,
            'amount' => $this->amount,
            'estimatevalue' => $this->estimatevalue,
            'lastmodified' => $this->lastmodified,
        ]);

        $query->andFilterWhere(['like', 'fu_project.name', $this->name])
            ->andFilterWhere(['like', 'news', $this->news])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}
