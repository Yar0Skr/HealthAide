Composer:

FileInput
---
        $form->field($model, 'image')->widget(FileInput::classname(), [
                    'options' => ['multiple'=>false, 'accept' => 'image/*'],
                    'pluginOptions'=>[
                        'initialPreview'=>[
                            $model->image ? '/web/uploads/info/images/'.$model->image : null,
                        ],
                        'initialPreviewShowDelete' => false,
                        'initialPreviewAsData'=>true,
                        'initialCaption'=>$model->image,
                        'showDrag' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'overwriteInitial',
                    ]
                ]);
                
OwlCarousel    
---



        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id',
                'class' => 'owl'
            ],
            'pluginOptions'    => [
                'autoplay'          => true,
                'autoplayTimeout'   => 3000,
                'items'             => 1,
                'loop'              => true,
                'dots'              => false,
                'lazyLoad'          => true,
                'lazyLoadEager'     => 2,
            ]
        ]);
        ?>
        
        <div class="item-class"><?=Html::img("/web/img/layouts/header1.jpg")?></div>
        <div class="item-class"><?=Html::img("/web/img/layouts/header2.jpg")?></div>
        
        <?php OwlCarouselWidget::end(); ?>

LazyLoad        
---
        <?=LazyLoad::widget(['src'=>'','options'=>['alt' => ""]])?>
