<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Media';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Media', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <img src="<?= Yii::getAlias('@web').'/'.$media->filepath; ?>" alt="">
            <div class="card-body">
                <h5><?= $media->filename; ?></h5>
            </div>
        </div>
    </div>
</div>
