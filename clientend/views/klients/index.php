<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KlientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Klients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klients-index">

    <h1>Клиенты</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать Базу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'image',
            'data',
            'company_name',
            'contact_person',
            'number',
            //'faks',
            'e_mail',
            'adres',
            'type_klient',
            'interesting_product',
            //'the_note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
