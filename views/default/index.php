
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Modül Ana Sayfa';
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="row">
        <div class="col-md-2">

            <div class="text-center">
               
                <?php if(Yii::$app->user->can('user'))
                     {
                       echo Html::a('Okunanlar', ['/kitap/okunankitap'], ['class'=>'btn btn-primary']);
                                
                     }  ?>

                     <?php if(Yii::$app->user->can('admin'))
                     {
                       echo Html::a('Kategori', ['/kitap/kategori'], ['class'=>'btn btn-primary']);
                                
                     }  ?>
                


                
            </div>
        </div>

         <div class="col-md-2">

            <div class="text-center">
                

            

                     <?php if(Yii::$app->user->can('admin'))
                     {
                            echo Html::a('Kitap Ekle', ['/kitap/kitaplar'], ['class'=>'btn btn-primary']);
                                
                     }  ?>


                 <?php if(Yii::$app->user->can('user'))
                     {
                       echo Html::a('Okunacaklar', ['/kitap/okuyacakkitap'], ['class'=>'btn btn-primary']);
                                
                     }  ?>


                
            </div>
        </div>

         <div class="col-md-2">

            <div class="text-center">

                 

                      <?php if(Yii::$app->user->can('admin'))
                     {
                       echo Html::a('Kitap Öner', ['/kitap/kitaponeri'], ['class'=>'btn btn-primary']);
                                
                     }  ?>

                     <?php if(Yii::$app->user->can('user'))
                     {
                       echo Html::a('Favoriler', ['/kitap/favorikitap'], ['class'=>'btn btn-primary']);
                                
                     }  ?>



                
            </div>
        </div>

        <div class="col-md-2">

            <div class="text-center">

            <?php if(Yii::$app->user->can('user'))
                     {
                       echo Html::a('Önerilenler', ['/kitap/onerilenler'], ['class'=>'btn btn-primary']);
                                
                     }  ?>



                
            </div>
        </div>

         <div class="col-md-2">

            <div class="text-center">

            <?php if(Yii::$app->user->can('user'))
                     {
                       echo Html::a('Kitaplar', ['/kitap/kitaplistele'], ['class'=>'btn btn-primary']);
                                
                     }  ?>



                
            </div>
        </div>
 </div>






