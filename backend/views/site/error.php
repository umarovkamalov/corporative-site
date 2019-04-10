<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = $name;
?>
<div class="container">

<div class="row">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-sm-12">
        <img width="500" src="<?= Url::to('@web/')?>img/404.png" alt="">
    </div>

    <div class="alert alert-danger">
        Такой страницы нет
    </div>

    <p>
        Мы записали ваш ip адрес: <?php
        echo $_SERVER['SERVER_ADDR'];
        ?>, позже выясним в чем было проблема
    </p>


</div>


</div>
