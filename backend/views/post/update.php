<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\post */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Post',
]) . $model->id_post;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Publicaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_post, 'url' => ['view', 'id' => $model->id_post]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
