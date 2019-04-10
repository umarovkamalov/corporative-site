<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Klients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klients-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_klient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interesting_product')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'the_note')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'imagemanager',
                'fullscreen',
            ],
            'imageUpload' => Url::to(['@frontend/web/upload/']),
        ],
    ]);?>
	

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
