<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\post */

$this->title = Yii::t('app', 'Crear Publicación');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Publicaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
