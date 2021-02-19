<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string|null $content
 * @property string $date_created
 * @property int $user_id
 * @property int $article_id
 * @property int $parent_id
 * @property int $deleted
 * @property string|null $user_name
 * @property string|null $user_email
 * @property int $is_public
 * @property int $image_id
 * @property int $ispoor
 * @property int $isgood
 * @property string|null $ip
 * @property int $video_id
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date_created'], 'safe'],
            [['user_id', 'article_id', 'parent_id', 'deleted', 'is_public', 'image_id', 'ispoor', 'isgood', 'video_id'], 'integer'],
            [['user_name', 'user_email'], 'string', 'max' => 40],
            [['ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'date_created' => 'Date Created',
            'user_id' => 'User ID',
            'article_id' => 'Article ID',
            'parent_id' => 'Parent ID',
            'deleted' => 'Deleted',
            'user_name' => 'User Name',
            'user_email' => 'User Email',
            'is_public' => 'Is Public',
            'image_id' => 'Image ID',
            'ispoor' => 'Ispoor',
            'isgood' => 'Isgood',
            'ip' => 'Ip',
            'video_id' => 'Video ID',
        ];
    }
}
