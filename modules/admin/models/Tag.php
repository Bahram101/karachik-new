<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $name
 * @property int $article_id
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['article_id'], 'integer'],
            [['name'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'article_id' => 'Article ID',
        ];
    }
}
