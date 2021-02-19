<?php
/**
 * Created by PhpStorm.
 * User: Bahram
 * Date: 08.02.2021
 * Time: 12:10
 */

namespace app\widgets;
use yii\base\Widget;
use app\models\Tag;

class TagWidget extends Widget{

    public function run(){
        $tag = new Tag;
        $tags = $tag->getAllTags();
        return $this->render('tag_widget', compact('tags'));

    }

}