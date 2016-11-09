<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AboutClassAsset;

AboutClassAsset::register($this);

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

//$this->registerJsFile('');
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Lighthouse.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Desert.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Penguins.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Tulips.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Lighthouse.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Desert.jpg" alt="Short alt text">
            </a>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Lighthouse.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Desert.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Penguins.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Tulips.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Lighthouse.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-xs-4 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="/images/Desert.jpg" alt="Short alt text">
            </a>
        </div>
    </div>




    <div class="modal" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height: 900px;">
        <div class="modal-dialog modal-lg" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="image-gallery-title"></h4>
                </div>

                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive" src="/images/Lighthouse.jpg">
                </div>

                <div class="modal-footer">
                    <div class="col-md-8 text-justify" id="image-gallery-caption">
                        This text will be overwritten about photo
                    </div>
                    <button class="btn btn-primary">Детальний аналіз фото</button>
                </div>
            </div>
        </div>
    </div>

    <script>




    </script>
