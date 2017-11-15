<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Fondo;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\noticiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model backend\models\Fondo */

$this->title = Yii::t('app', 'Noticias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Noticia'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [

                'label'=>'Nombre Fondo',
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'tbl_column_name text-center'];
                },
                //'attribute'=>'nombre_fondo',
                'value'=>function($model){
                    $fondo=$model->fondo;
                    if($fondo!=null){
                        return $model->fondo->nombre_fondo;
                    }else{
                        return "No tiene fondo";
                    }
                }
            ],
            [

                'label'=>'Página de bases',
                'format'=> 'html',
                'headerOptions' => ['class' => 'text-center'],
                /*'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'tbl_column_name text-center'];
                },*/
                'attribute'=>'noticia_secundaria',
                'value'=>function($model){
                    return substr(($model->noticia_secundaria),0,strrpos(($model->noticia_secundaria),' ', 100 -strlen(($model->noticia_secundaria)))).'...';
//                    return Html::decode($model->noticia_secundaria);
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template' => ' {Eliminar} {Modificar} {Ver}',
                'options'=> ['style'=>'min-width:150px;'],
                'buttons' => [
                    'Eliminar'=>function($url,$model,$key){


                        return  Html::a(Yii::t('app', '<span class="glyphicon glyphicon-trash"></span>'), ['delete', 'id' => $model->id_noticia], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app', '¿Está seguro de eliminar esta noticia?'),
                                'method' => 'post',
                            ],
                        ]);



                    },
                    'Modificar'=>function($url,$model,$key){


                        return
                            Html::a(Yii::t('app', '<span class="glyphicon glyphicon-edit"></span>'), ['update', 'id' => $model->id_noticia], ['class' => 'btn btn-primary']);


                    },
                    'Ver'=>function($url,$model,$key){


                        return
                            Html::a(Yii::t('app', '<span class="glyphicon glyphicon-eye-open"></span>'), ['view', 'id' => $model->id_noticia], ['class' => 'btn btn-primary']);


                    },

                ],
            ],
        ],
    ]); ?>

<?php Pjax::end(); ?></div>
