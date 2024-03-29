<?php

namespace common\models;

use Yii;
use yii\filters\AccessControl;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $header
 * @property string $content
 * @property string $author
 * @property string $date
 * @property string $type
 * @property string $slug
 */
class News extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header', 'content', 'author'], 'required'],
            [['content', 'slug'], 'string'],
            [['date'], 'safe'],
            [['header', 'author', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header',
            'content' => 'Content',
            'author' => 'Author',
            'date' => 'Date',
            'type' => 'Type',
            'slug' => 'Slug',
        ];
    }

    /**
     * @inheritdoc
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
