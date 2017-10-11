<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "online_modules".
 *
 * @property integer $column_1
 * @property string $name
 * @property string $url
 * @property string $desription
 */
class OnlineModules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'online_modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['description'], 'string'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'column_1' => 'Column 1',
            'name' => 'Name',
            'url' => 'Url',
            'description' => 'description',
        ];
    }

    /**
     * @inheritdoc
     * @return OnlineModulesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OnlineModulesQuery(get_called_class());
    }
}
