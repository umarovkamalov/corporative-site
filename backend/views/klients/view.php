<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Klients */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Klients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="klients-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изминить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Загрузить фото', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'image',
            'data',
            'company_name',
            'contact_person',
            'number',
            'faks',
            'e_mail',
            'adres',
            'type_klient',
            'interesting_product',
            'the_note:ntext',
        ],
    ]) ?>

</div>
