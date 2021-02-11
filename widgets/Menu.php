<?php
/**
 * Created by PhpStorm.
 * User: Bahram
 * Date: 08.02.2021
 * Time: 12:10
 */

namespace app\widgets;


use yii\base\Widget;

class Menu extends Widget
{

    public function run(){

        return $this->render('menu');

    }

}