
<?// debug($category);die;?>
<li class="<? if(isset($category['childs']) && $category['parent_id'] == 0) echo 'nav-item dropdown';
               if(!isset($category['childs']) && $category['parent_id'] == 0) echo 'nav-item';
               if($category['parent_id'] > 0) echo '';
    ?>">
    <a class="<? if(isset($category['childs']) && $category['parent_id'] == 0) echo 'nav-link dropdown-toggle';
                 if(!isset($category['childs']) && $category['parent_id'] == 0) echo 'nav-link';
                 if($category['parent_id'] > 0) echo 'dropdown-item';
                 if(($category['parent_id'] > 0) && (isset($category['childs']))) echo ' icon-arrow';?>"
       href="/category/<?=$category['id']?>" data-toggle="dropdown"><?=$category['title']?></a>

    <?php if(isset($category['childs'])): ?>
        <ul class="dropdown-menu dropdown-menu-left">
            <?php echo $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>


