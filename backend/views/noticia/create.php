<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\noticia */

$this->title = Yii::t('app', 'Crear Noticia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
