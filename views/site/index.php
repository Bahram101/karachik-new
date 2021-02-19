<!-- Popular Content news -->
<section class="bg-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Popular news carousel -->
                <div class="card__post-carousel">
                    <div class="item">
                        <!-- Post Article -->
                        <div class="card__post">
                            <div class="card__post__body">
                                <a href="./card-article-detail-v1.html">
                                    <img src="/images/placeholder/800x600.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="card__post__content bg__post-cover">
                                    <div class="card__post__category">
                                        covid-19
                                    </div>
                                    <div class="card__post__title">
                                        <h2>
                                            <a href="#">
                                                Global solidarity to fight COVID-19, and indonesia stay safe and health
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="card__post__author-info">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    by david hall
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    Descember 09, 2016
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="item">
                        <!-- Post Article -->
                        <div class="card__post">
                            <div class="card__post__body">
                                <a href="./card-article-detail-v1.html">
                                    <img src="/images/placeholder/800x600.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="card__post__content bg__post-cover">
                                    <div class="card__post__category">
                                        covid-19
                                    </div>
                                    <div class="card__post__title">
                                        <h2>
                                            <a href="#">
                                                Global solidarity to fight COVID-19, and indonesia stay safe and health
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="card__post__author-info">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    by david hall
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    Descember 09, 2016
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Popular news carousel -->

                <!-- Popular news Category -->
                <div class="wrapper__list__article">
                    <h4 class="border_section pt-3">Дунё хабарлари</h4>
                    <div class="row ">
                        <?foreach ($articlesForMainPage[3] as $key => $val):?>

                            <?if($key == 0 or $key == 3):?>
                                <div class="col-lg-6 pd-0">
                                    <div class="article__entry">
                                    <div class="article__image">
                                        <a href="/article/<?=$val['id']?>">
                                            <img src="/uploads/images/<?=$val['image']?>" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                        <span class="text-dark text-capitalize">
                                            <?=$val['date_created']?>
                                        </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="#">
                                                <?=$val['title']?>
                                            </a>
                                        </h5>
                                        <p>
                                            <?=$val['short_content']?>
                                        </p>
                                        <a href="#" class="btn btn-outline-primary mb-4 text-capitalize">Батафсил</a>
                                    </div>
                                </div>
                            <?endif;?>
                            <?if($key > 0 and $key < 3 or $key > 3 and $key < 6):?>
                                    <div class="mb-3">
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="/uploads/images/<?=$val['image']?>" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="card__post__body ">
                                            <div class="card__post__content">
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                        <span class="text-dark text-capitalize">
                                                            <?=$val['date_created']?>
                                                        </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            <?=$val['title']?>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?endif;?>
                            <?if($key == 2 or $key == 5):?>
                                </div>
                            <?endif;?>

                        <?endforeach;?>
                    </div>
                </div>
                <!-- Popular news Category -->

                <!-- Popular 3 news carousel -->
                <div class="wrapper__list__article">
                    <h4 class="border_section">technology</h4>
                    <div class="row ">
                        <div class="col-lg-12 pd-0">
                            <div class="article__entry-carousel-three">
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="#">
                                                <img src="/images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary">
                                                        by david hall
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        descember 09, 2016
                                                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="#">
                                                    Maecenas accumsan tortor ut velit pharetra mollis.
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="#">
                                                <img src="/images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                    <span class="text-primary">
                        by david hall
                    </span>
                                                </li>
                                                <li class="list-inline-item">
                    <span>
                        descember 09, 2016
                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="#">
                                                    Maecenas accumsan tortor ut velit pharetra mollis.
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="#">
                                                <img src="/images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                    <span class="text-primary">
                        by david hall
                    </span>
                                                </li>
                                                <li class="list-inline-item">
                    <span>
                        descember 09, 2016
                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="#">
                                                    Maecenas accumsan tortor ut velit pharetra mollis.
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="#">
                                                <img src="/images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                    <span class="text-primary">
                        by david hall
                    </span>
                                                </li>
                                                <li class="list-inline-item">
                    <span>
                        descember 09, 2016
                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="#">
                                                    Maecenas accumsan tortor ut velit pharetra mollis.
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="#">
                                                <img src="/images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                    <span class="text-primary">
                        by david hall
                    </span>
                                                </li>
                                                <li class="list-inline-item">
                    <span>
                        descember 09, 2016
                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="#">
                                                    Maecenas accumsan tortor ut velit pharetra mollis.
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Popular 3 news carousel -->

                <!-- Category news -->
                <div class="wrapper__list__article">
                    <h4 class="border_section">technology</h4>
                    <div class="wrapp__list__article-responsive">
                        <!-- Post Article List -->
                        <div class="card__post card__post-list card__post__transition mt-30">
                            <div class="row ">
                                <div class="col-md-5">
                                    <div class="card__post__transition">
                                        <a href="#">
                                            <img src="/images/placeholder/500x400.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 my-auto pl-0">
                                    <div class="card__post__body ">
                                        <div class="card__post__content  ">
                                            <div class="card__post__category ">
                                                travel
                                            </div>
                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                    <span class="text-primary">
                                        by david hall
                                    </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                        descember 09, 2016
                                    </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="#">
                                                        Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                    </a>
                                                </h5>
                                                <p class="d-none d-lg-block d-xl-block mb-0">
                                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                    sollicitudin ut est. In fringilla dui dui.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Post Article List -->
                        <div class="card__post card__post-list card__post__transition mt-30">
                            <div class="row ">
                                <div class="col-md-5">
                                    <div class="card__post__transition">
                                        <a href="#">
                                            <img src="/images/placeholder/500x400.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 my-auto pl-0">
                                    <div class="card__post__body ">
                                        <div class="card__post__content  ">
                                            <div class="card__post__category ">
                                                travel
                                            </div>
                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                    <span class="text-primary">
                                        by david hall
                                    </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                        descember 09, 2016
                                    </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="#">
                                                        Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                    </a>
                                                </h5>
                                                <p class="d-none d-lg-block d-xl-block mb-0">
                                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                    sollicitudin ut est. In fringilla dui dui.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Post Article List -->
                        <div class="card__post card__post-list card__post__transition mt-30">
                            <div class="row ">
                                <div class="col-md-5">
                                    <div class="card__post__transition">
                                        <a href="#">
                                            <img src="/images/placeholder/500x400.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 my-auto pl-0">
                                    <div class="card__post__body ">
                                        <div class="card__post__content  ">
                                            <div class="card__post__category ">
                                                travel
                                            </div>
                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                    <span class="text-primary">
                                        by david hall
                                    </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                        descember 09, 2016
                                    </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="#">
                                                        Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                    </a>
                                                </h5>
                                                <p class="d-none d-lg-block d-xl-block mb-0">
                                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                    sollicitudin ut est. In fringilla dui dui.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Post Article List -->
                        <div class="card__post card__post-list card__post__transition mt-30">
                            <div class="row ">
                                <div class="col-md-5">
                                    <div class="card__post__transition">
                                        <a href="#">
                                            <img src="/images/placeholder/500x400.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 my-auto pl-0">
                                    <div class="card__post__body ">
                                        <div class="card__post__content  ">
                                            <div class="card__post__category ">
                                                travel
                                            </div>
                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                    <span class="text-primary">
                                        by david hall
                                    </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                        descember 09, 2016
                                    </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="#">
                                                        Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                    </a>
                                                </h5>
                                                <p class="d-none d-lg-block d-xl-block mb-0">
                                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                    sollicitudin ut est. In fringilla dui dui.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Post Article List -->
                        <div class="card__post card__post-list card__post__transition mt-30">
                            <div class="row ">
                                <div class="col-md-5">
                                    <div class="card__post__transition">
                                        <a href="#">
                                            <img src="/images/placeholder/500x400.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 my-auto pl-0">
                                    <div class="card__post__body ">
                                        <div class="card__post__content  ">
                                            <div class="card__post__category ">
                                                travel
                                            </div>
                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                    <span class="text-primary">
                                        by david hall
                                    </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                        descember 09, 2016
                                    </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="#">
                                                        Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                    </a>
                                                </h5>
                                                <p class="d-none d-lg-block d-xl-block mb-0">
                                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                    sollicitudin ut est. In fringilla dui dui.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="mx-auto">
                    <!-- Pagination -->
                    <div class="pagination-area">
                        <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                             style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <a href="#">
                                «
                            </a>
                            <a href="#">
                                1
                            </a>
                            <a class="active" href="#">
                                2
                            </a>
                            <a href="#">
                                3
                            </a>
                            <a href="#">
                                4
                            </a>
                            <a href="#">
                                5
                            </a>

                            <a href="#">
                                »
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- End Category news -->
            <?=$this->render('/partials/sidebar.php')?>


        </div>
    </div>
</section>
<!-- End Popular Content news -->