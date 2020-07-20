<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $blog app\models\Blog */
/* @var $nextBlog app\models\Blog */
/* @var $prevBlog app\models\Blog */

$this->title = $blog->id;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
                <div class="single-post">
                    <div align="center" class="feature-img">
                        <img class="img-fluid" src="/uploads/Blog/images/<?=$blog->image?>" alt=" <?=$blog->alt_tag?>">
                    </div>
                    <div class="blog_details">
                        <h1><?=$blog->header?>
                        </h1>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> <?=$blog->author?></a></li>
                            <li><a href="#"><i class="fa fa-clock-o"></i> <?=$blog->read_time?></a></li>
                        </ul>
                        <p style="font-size: 16pt">
                            <?=$blog->text?>
                        </p>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <?php if (!empty($prevBlog)){ ?>
                                 <div class="thumb">
                                        <a href="<?=Url::toRoute('blog/'.$prevBlog->url_name)?>">
                                            <img style="width: 100px; background: white" class="img-fluid"
                                                 src="/uploads/Blog/images/<?=$prevBlog->image ? $prevBlog->image : 'blog_placeholder.png'?>" alt="">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="<?=Url::toRoute('blog/'.$prevBlog->url_name)?>">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="<?=Url::toRoute('blog/'.$prevBlog->url_name)?>">
                                            <h4><?= $prevBlog->header?></h4>
                                        </a>
                                    </div>
                            <?php } ?>
                        </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <?php if (!empty($nextBlog)){ ?>
                                <div class="detials">
                                        <p>Next Post</p>
                                        <a href="<?=Url::toRoute('blog/'.$nextBlog->url_name)?>">
                                            <h4><?= $nextBlog->header?></h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="<?=Url::toRoute('blog/'.$nextBlog->url_name)?>">
                                            <span class="lnr text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="<?=Url::toRoute('blog/'.$nextBlog->url_name)?>">
                                            <img style="width: 100px; background: white" class="img-fluid"
                                                 src="/uploads/Blog/images/<?=$nextBlog->image ? $nextBlog->image : 'blog_placeholder.png'?>" alt="">
                                        </a>
                                    </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->