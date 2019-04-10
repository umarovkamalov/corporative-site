<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Klients */

$this->title = 'Create Klients';
$this->params['breadcrumbs'][] = ['label' => 'Klients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klients-create">

    <h1>Создать Базу</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
