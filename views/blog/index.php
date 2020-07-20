<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $blogs \app\models\Blog */
/* @var $page integer */
/* @var $total_pages integer */

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;

?>



<!-- bradcam_area_start  -->
<!--<div class="bradcam_area breadcam_bg bradcam_overlay">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-xl-12">-->
<!--                <div class="bradcam_text">-->
<!--                    <h3>blog</h3>-->
<!--                    <p><a href="index.html">Home /</a> blog</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- bradcam_area_end  -->


<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                        foreach ($blogs as $blog){ ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="uploads/Blog/images/<?=$blog->image?>" alt="">
                                    <a class="blog_item_date">
                                        <h3><?=date('M j Y g:i A', strtotime( $blog->created_at))?></h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="hover d-inline-block" href="<?= Url::to('blog/'.$blog->url_name)?>">
                                        <h2><?=$blog->header?></h2>
                                    </a>
                                    <p><?=$blog->short_info?></p>
                                    <ul class="blog-info-link">
                                        <li><i class="fa fa-clock-o"></i> <?=$blog->read_time?></li>
                                        <li><i class="fa fa-user"></i> <?=$blog->author?></li>
                                    </ul>
                                </div>
                            </article>
                    <?php } ?>


                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="<?=Url::to('/blog')?>" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <?php if ($page > 1){?>
                                <li class="page-item">
                                    <a href="<?=Url::to('/blog?page='.($page-1))?>" class="page-link"><?= $page-1 ?></a>
                                </li>
                            <?php } ?>
                            <li class="page-item active">
                                <a href="#" class="page-link"><?= $page ?></a>
                            </li>
                            <?php if ($page != $total_pages){?>
                            <li class="page-item">
                                <a href="<?=Url::to('/blog?page='.($page + 1))?>" class="page-link"><?= $page+1 ?></a>
                            </li>
                            <?php } ?>
                            <li class="page-item">
                                <a href="<?=Url::to('/blog?page='.$total_pages)?>" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
