<?php
/**
 * Created by PhpStorm.
 * User: Bahram
 * Date: 08.02.2021
 * Time: 12:10
 */

namespace app\widgets;
use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget{

    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;

    public function init(){
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        $this->data = Category::find()->asArray()->indexBy('id')->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        return $this->menuHtml;
    }

    protected function getTree(){
        $tree = [];
        foreach($this->data as $id => &$node){
            if(!$node['parent_id']){
                $tree[$id] = &$node;
            }else{
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab=''){
        $str = '';
        foreach($tree as $category){
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab){
        ob_start();
        include __DIR__ . '/views/menu_widget/' . $this->tpl;
        return ob_get_clean();
    }

}