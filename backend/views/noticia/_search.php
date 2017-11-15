<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\noticiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_noticia') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'noticia_principal') ?>

    <?= $form->field($model, 'noticia_secundaria') ?>

    <?= $form->field($model, 'noticia_terciaria') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
