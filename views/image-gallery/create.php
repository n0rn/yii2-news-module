<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var dmstr\modules\news\models\ImageGallery $model
*/

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => 'Image Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-gallery-create">

    <p class="pull-left">
        <?= Html::a(Yii::t('app', 'Cancel'), \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
