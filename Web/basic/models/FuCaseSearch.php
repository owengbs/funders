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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'companyId', 'phaseId', 'amount', 'institutionId'], 'integer'],
            [['comment', 'date', 'lastmodified', 'author'], 'safe'],
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
        $query = FuCase::find();

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
            'phaseId' => $this->phaseId,
            'amount' => $this->amount,
            'institutionId' => $this->institutionId,
            'date' => $this->date,
            'lastmodified' => $this->lastmodified,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}