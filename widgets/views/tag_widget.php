<aside class="wrapper__list__article">
    <h4 class="border_section">tags</h4>
    <div class="blog-tags p-0">
        <ul class="list-inline">
            <? foreach($tags as $tag){?>
            <li class="list-inline-item">
                <a href="#"><?=$tag['name'];?></a>
            </li>
            <?}?>
        </ul>
    </div>
</aside>