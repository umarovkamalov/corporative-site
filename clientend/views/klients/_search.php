<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KlientsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'contact_person') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'faks') ?>

    <?php // echo $form->field($model, 'e_mail') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <?php // echo $form->field($model, 'type_klient') ?>

    <?php // echo $form->field($model, 'interesting_product') ?>

    <?php // echo $form->field($model, 'the_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
