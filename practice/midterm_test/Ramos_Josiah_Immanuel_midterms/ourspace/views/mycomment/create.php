<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\mycomment */

$this->title = 'Create a Comment';
$this->params['breadcrumbs'][] = ['label' => 'Mycomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mycomment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
