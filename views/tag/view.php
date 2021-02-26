<?
use yii\helpers\Url;
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Breadcrumb -->
            <ul class="breadcrumbs bg-light mb-4">
                <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__url">
                        <i class="fa fa-home"></i> Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__url">News</a>
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current">
                    World
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <aside class="wrapper__list__article ">
                <div class="row">
                    <?
                    if($articles){
                        foreach ($articles as $article): ?>
                        <div class="col-md-6">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="/article/<?= $article['id']; ?>">
                                        <img src="/uploads/images/<?= $article['image'] ?>" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                <span class="text-dark text-capitalize">
                                <?= $article['date_created'] ?>
                                </span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="/article/<?= $article['id'] ?>">
                                            <?= $article['title'] ?>
                                        </a>
                                    </h5>
                                    <p>
                                        <?= $article['short_content'] ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <? endforeach;
                    }else{?>
                        <div class="col-md-12"><h4>Бундай тегдаги мақола йўқ</h4></div>

                    <?}
                    ?>
                </div>

            </aside>
            <div class="mx-auto">
                <!-- Pagination -->
                <div class="pagination-area">
                    <?
                    echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages
                    ])
                    ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?= $this->render('/partials/sidebar.php') ?>
    </div>
</div>