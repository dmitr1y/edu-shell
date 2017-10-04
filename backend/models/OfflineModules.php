<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "offline_modules".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $win
 * @property integer $mac
 * @property integer $lin
 * @property string $libs
 * @property string $instruction
 * @property string $url
 * @property string $slug
 */
class OfflineModules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offline_modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'instruction', 'url'], 'string'],
            [['win', 'mac', 'lin'], 'integer'],
            [['name', 'libs'], 'string', 'max' => 255],
            [['slug'], 'string', 'max' => 2555],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'win' => 'Win',
            'mac' => 'Mac',
            'lin' => 'Lin',
            'libs' => 'Libs',
            'instruction' => 'Instruction',
            'url' => 'Url',
            'slug' => 'Slug',
        ];
    }

    /**
     * @inheritdoc
     * @return OfflineModulesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OfflineModulesQuery(get_called_class());
    }
}
