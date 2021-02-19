<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $alias
 * @property string|null $short_content
 * @property string|null $content
 * @property string|null $image
 * @property int $hits
 * @property string $date_created
 * @property int $is_public
 * @property int $category_id
 * @property int $main_page
 * @property int $on_slider
 * @property string|null $lid
 * @property string|null $tag
 */
class Article extends \yii\db\ActiveRecord{

    public static function tableName(){
        return 'articles';
    }


    public function rules(){
        return [
            [['short_content', 'content', 'lid'], 'string'],
            [['hits', 'is_public', 'category_id', 'main_page', 'on_slider'], 'integer'],
            [['date_created'], 'safe'],
            [['title', 'alias', 'image'], 'string', 'max' => 400],
            [['tag'], 'string', 'max' => 500],
        ];
    }


    public function attributeLabels(){
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'short_content' => 'Short Content',
            'content' => 'Content',
            'image' => 'Image',
            'hits' => 'Hits',
            'date_created' => 'Date Created',
            'is_public' => 'Is Public',
            'category_id' => 'Category ID',
            'main_page' => 'Main Page',
            'on_slider' => 'On Slider',
            'lid' => 'Lid',
            'tag' => 'Widget',
        ];
    }
}
