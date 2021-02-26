<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 24.02.2021
 * Time: 14:59
 */
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 bg-white">
            <!-- Article detail -->
            <div class="wrap__article-detail">
                <div class="wrap__article-detail-title">
                    <h1><?= $article->title;?></h1>
                </div>
                <hr>
                <div class="wrap__article-detail-info">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <span class="text-dark text-capitalize ml-1">
                                <?= $article->date_created;?>
                            </span>
                        </li>
                        <li class="list-inline-item ">
                            <span class="mr-1 ml-1">
                                <i class="fa fa-eye"></i>
                                <?= $article->hits;?>
                            </span>
                        </li>
                         <li class="list-inline-item ">
                            <a href="#comments" class="text-dark">
                                <i class="fa fa-comment"></i> 3
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>

                <div class="wrap__article-detail-content">
                    <p class="has-drop-cap-fluid">
                        <?= $article->content;?>
                    </p>
                </div>
            </div>

            <!-- News Tags -->
            <div class="blog-tags">
                <ul class="list-inline">
                    <? foreach($article->tags as $tag):?>
                    <li class="list-inline-item">
                        <a href="/tag/<?=$tag->name?>"><?=$tag->name?></a>
                    </li>
                    <? endforeach;?>
                </ul>
            </div>

            <!-- Profile author -->
            <div class="wrap__profile">
                <div class="wrap__profile-author">
                    <div class="wrap__profile-author-detail">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o facebook ">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o twitter ">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o instagram ">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o telegram ">
                                    <i class="fa fa-telegram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o linkedin ">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Related Articles-->
            <div class="related-article">
                <h4 style="margin-top:55px">Бошқа мақолалар</h4>

                <div class="article__entry-carousel-three">
                    <div class="item">

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

            <!-- Comment  -->
            <div id="comments" class="comments-area">
                <h3 class="comments-title">2 Comments:</h3>

                <ol class="comment-list">
                    <li class="comment">
                        <aside class="comment-body">
                            <div class="comment-meta">
                                <div class="comment-author vcard">
                                    <img src="/images/placeholder/80x80.jpg" class="avatar" alt="image">
                                    <b class="fn">Sinmun</b>
                                    <span class="says">says:</span>
                                </div>

                                <div class="comment-metadata">
                                    <a href="#">
                                        <span>April 24, 2019 at 10:59 am</span>
                                    </a>
                                </div>
                            </div>

                            <div class="comment-content">
                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                    when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>

                            <div class="reply">
                                <a href="#" class="comment-reply-link">Reply</a>
                            </div>
                        </aside>

                        <ol class="children">
                            <li class="comment">
                                <aside class="comment-body">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="/images/placeholder/80x80.jpg" class="avatar" alt="image">
                                            <b class="fn">Sinmun</b>
                                            <span class="says">says:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <span>April 24, 2019 at 10:59 am</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the
                                            1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</p>
                                    </div>

                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </aside>
                            </li>
                        </ol>
                    </li>

                    <li class="comment">
                        <aside class="comment-body">
                            <div class="comment-meta">
                                <div class="comment-author vcard">
                                    <img src="/images/placeholder/80x80.jpg" class="avatar" alt="image">
                                    <b class="fn">Sinmun</b>
                                    <span class="says">says:</span>
                                </div>

                                <div class="comment-metadata">
                                    <a href="#">
                                        <span>April 24, 2019 at 10:59 am</span>
                                    </a>
                                </div>
                            </div>

                            <div class="comment-content">
                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                    when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>

                            <div class="reply">
                                <a href="#" class="comment-reply-link">Reply</a>
                            </div>
                        </aside>
                    </li>
                </ol>

                <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply</h3>

                    <form class="comment-form">
                        <p class="comment-notes">
                            <span id="email-notes">Your email address will not be published.</span>
                            Required fields are marked
                            <span class="required">*</span>
                        </p>
                        <p class="comment-form-comment">
                            <label for="comment">Comment</label>
                            <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525"
                                      required="required"></textarea>
                        </p>
                        <p class="comment-form-author">
                            <label>Name <span class="required">*</span></label>
                            <input type="text" id="author" name="name" required="required">
                        </p>
                        <p class="comment-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required="required">
                        </p>
                        <p class="comment-form-url">
                            <label for="url">Website</label>
                            <input type="url" id="url" name="url">
                        </p>
                        <p class="comment-form-cookies-consent">
                            <input type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                   id="wp-comment-cookies-consent">
                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser
                                for the next
                                span I comment.</label>
                        </p>
                        <p class="form-submit">
                            <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                        </p>
                    </form>
                </div>
            </div>
            <!-- Comment -->

            <!-- Previous and Next Post-->
            <div class="row">
                <div class="col-md-6">
                    <div class="single_navigation-prev">
                        <a href="#">
                            <span>previous post</span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, similique.
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_navigation-next text-left text-md-right">
                        <a href="#">
                            <span>next post</span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, nesciunt.
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>


        </div>
        <?=$this->render('/partials/sidebar.php')?>
    </div>
</div>
