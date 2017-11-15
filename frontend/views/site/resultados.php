<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use frontend\models\Convocatoria;
use frontend\models\Estadopostulacion;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostulacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Historial de convocatorias');
?>
<div class="postulacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

<div class='row'>
    <div class="col-lg-5">
        Listado de convocatorias y resultados:
    </div>
</div>

    <div style="overflow: auto;">
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                [
                'attribute' => 'convocatoria',
                'label' => 'Convocatoria',
                'value'=>'convocatoria.nombreConvocatoria',
                'headerOptions' => ['class' => 'text-center', 'style' => 'font-weight: bold'],
                                            'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'tbl_column_name', 'style' => 'max-width: 300px; word-wrap: break-word;'];
            },
                'filter'=>Html::activeDropDownList($searchModel,'id_convocatoria',ArrayHelper::map(Convocatoria::find()->where(['id_estadoConvocatoria' => 3])->asArray()->all(), 'id_convocatoria','nombreConvocatoria'),['class'=>'form-control','prompt'=>'Filtrar']),
            ],

             [
            'attribute' => 'concursante',
            'label' => 'Concursante',
                'headerOptions' => ['class' => 'text-center', 'style' => 'font-weight: bold'],
                                            'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'tbl_column_name', 'style' => 'max-width: 300px; word-wrap: break-word;'];
            },
            'value'=>'concursante.nombreConcursante'
            ],

            [
            'attribute' => 'nombreOrganizacion',
            'label' => 'Organización',
                'headerOptions' => ['class' => 'text-center', 'style' => 'font-weight: bold'],
                                            'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'tbl_column_name', 'style' => 'max-width: 300px; word-wrap: break-word;'];
            },
            'value'=>function($data){
                    if($data->formulario->nombre_organizacion==null){
                        return 'Sin nombre';
                    }else{
                        return $data->formulario->nombre_organizacion;
                    }        
            }
            ],
            [
            'attribute' => 'nombreProyecto',
            'label' => 'Proyecto',
                'headerOptions' => ['class' => 'text-center', 'style' => 'font-weight: bold'],
                                            'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'tbl_column_name', 'style' => 'max-width: 300px; word-wrap: break-word;'];
            },
            'value'=>function($data){
                    if($data->formulario->nombre_proyecto==null){
                        return 'Sin nombre';
                    }else{
                        return $data->formulario->nombre_proyecto;
                    }        
            }
            ],
             [
                'attribute' => 'estadopostulacion',
                'label' => 'Resultado',
                'contentOptions' => ['class' => 'text-center'],
                'format' => 'html',
                                'value'=>function($data){
                                    switch($data->id_estadopostulacion){
                                        case 1:
                                        return Html::tag('span', '&nbsp;'.$data->estadopostulacion->nombre_estadopostulacion.'&nbsp;', ['class' => 'label label-danger', 'style'=>'font-size: 12px;']);
                                        break;
                                        case 2:
                                        return Html::tag('span', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$data->estadopostulacion->nombre_estadopostulacion.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', ['class' => 'label label-success', 'style'=>' font-size: 12px;']);
                                        break;
                                        case 3:
                                        return Html::tag('span', '&nbsp;&nbsp;&nbsp;&nbsp;'.$data->estadopostulacion->nombre_estadopostulacion.'&nbsp;&nbsp;&nbsp;&nbsp;', ['class' => 'label label-primary', 'style'=>' font-size: 12px;']);
                                        break;
                                        case 4:
                                        return Html::tag('span',$data->estadopostulacion->nombre_estadopostulacion, ['class' => 'label label-warning', 'style'=>' font-size: 12px;']);
                                        break;                                                                       
                                    }
                                },
                'headerOptions' => ['class' => 'text-center', 'style' => 'font-weight: bold'],
                'filter'=>Html::activeDropDownList($searchModel,'id_estadopostulacion',ArrayHelper::map(Estadopostulacion::find()->where(['>','id_estadopostulacion',2])->asArray()->all(), 'id_estadopostulacion','nombre_estadopostulacion'),['class'=>'form-control','prompt'=>'Filtrar']),
            ],
            [
            'attribute' => 'montoAsignado',
            'label' => 'Monto asignado ($)',
            'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center', 'style' => 'font-weight: bold'],
            'value'=>function($data){
                    if($data->montoAsignado==null){
                        return 'Sin asignación';
                    }else{
                        return '$ '.number_format($data->montoAsignado, 0, ",", ".");
                    }        
            }
            ],                                                        
        ],
    ]); ?>
<?php Pjax::end(); ?>
    
</div>

</div>