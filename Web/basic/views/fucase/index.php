<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuCaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fu Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-case-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fu Case', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'companyId',
            'phaseId',
            'amount',
            'institutionId',
            // 'comment',
            // 'date',
            // 'lastmodified',
            // 'author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
