<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FuContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '投资人列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-contacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('创建投资人', ['create'], ['class' => 'btn btn-success']) ?>
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($uploadmodel, 'txtFile')->fileInput()->label('导入投资人') ?>

        <button class='btn btn-success'>Submit</button>
    
    <?php ActiveForm::end() ?>
    </p>


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => '_item',
//        'itemView' => function ($model, $key, $index, $widget) {
//            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
//        },
    ]) ?>

</div>
