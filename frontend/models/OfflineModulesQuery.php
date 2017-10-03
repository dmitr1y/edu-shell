<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OfflineModules]].
 *
 * @see OfflineModules
 */
class OfflineModulesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OfflineModules[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OfflineModules|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
