<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\noticia */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Noticia con id',
]) . $model->id_noticia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_noticia, 'url' => ['view', 'id' => $model->id_noticia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="noticia-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
