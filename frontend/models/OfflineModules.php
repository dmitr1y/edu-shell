<?php

namespace app\models;

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

    public static function translit($str){
        $alphavit = array(
            /*--*/
            "а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e",
            "ё"=>"yo","ж"=>"j","з"=>"z","и"=>"i","й"=>"i","к"=>"k","л"=>"l",
            "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t",
            "у"=>"y","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch","ш"=>"sh","щ"=>"sh",
            "ы"=>"i","э"=>"e","ю"=>"u","я"=>"ya"," "=>"_",
            /*--*/
            "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D","Е"=>"E","Ё"=>"Yo",
            "Ж"=>"J","З"=>"Z","И"=>"I","Й"=>"I","К"=>"K","Л"=>"L","М"=>"M",
            "Н"=>"N","О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T","У"=>"Y",
            "Ф"=>"F", "Х"=>"H","Ц"=>"C","Ч"=>"Ch","Ш"=>"Sh","Щ"=>"Sh",
            "Ы"=>"I","Э"=>"E","Ю"=>"U","Я"=>"Ya",
            "ь"=>"","Ь"=>"","ъ"=>"","Ъ"=>""
        );
        return strtr($str, $alphavit);
    }
}
