<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\noticia */

$this->title = $model->id_noticia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-view">



    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id_noticia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Volver'), ['index', 'id' => $model->id_noticia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar'), ['delete', 'id' => $model->id_noticia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '¿Está seguro de eliminar esta noticia?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_noticia',
            'noticia_secundaria:html',
        ],
    ]) ?>

</div>
