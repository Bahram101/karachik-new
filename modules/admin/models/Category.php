<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string|null $title
 * @property int $parent_id
 * @property string $date_created
 * @property int $is_public
 * @property int $type
 * @property string|null $url
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'is_public', 'type'], 'integer'],
            [['date_created'], 'required'],
            [['date_created'], 'safe'],
            [['title', 'url'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',
            'date_created' => 'Date Created',
            'is_public' => 'Is Public',
            'type' => 'Type',
            'url' => 'Url',
        ];
    }
}
