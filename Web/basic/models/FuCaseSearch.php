<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FuCase;

/**
 * FuCaseSearch represents the model behind the search form about `app\models\FuCase`.
 */
class FuCaseSearch extends FuCase
{
    public $fuPhase;
    public $fuInsititution;
    public $fuCompany;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'companyId', 'phaseId', 'amount', 'insititutionId'], 'integer'],
            [['comment', 'amountmsg', 'date', 'lastmodified', 'author'], 'safe'],
            [['fuPhase', 'fuInsititution', 'fuCompany'],'safe'],
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
        $query = FuCase::find()
                ->joinWith(['fuPhase','fuInsititution', 'fuCompany']);
                      
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $dataProvider->sort->attributes['fuPhase'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
            'asc' => ['fu_phase.name' => SORT_ASC],
            'desc' => ['fu_phase.name' => SORT_DESC],
        ];
        
        $dataProvider->sort->attributes['fuCompany'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
            'asc' => ['fu_company.name' => SORT_ASC],
            'desc' => ['fu_company.name' => SORT_DESC],
        ];
        
        $dataProvider->sort->attributes['fuInsititution'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
            'asc' => ['fu_insititution.name' => SORT_ASC],
            'desc' => ['fu_insititution.name' => SORT_DESC],
        ];
        $query->andFilterWhere([
            'id' => $this->id,
            'companyId' => $this->companyId,
            'phaseId' => $this->phaseId,
            'amount' => $this->amount,
            'insititutionId' => $this->insititutionId,
            'date' => $this->date,
            'lastmodified' => $this->lastmodified,
        ]);
        $query->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'amountmsg', $this->amountmsg])
            ->andFilterWhere(['like', 'fu_phase.name', $this->fuPhase])
            ->andFilterWhere(['like', 'fu_insititution.name', $this->fuInsititution])
            ->andFilterWhere(['like', 'fu_company.name', $this->fuCompany]);
        return $dataProvider;
    }
}
