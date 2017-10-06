<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OnlineModules]].
 *
 * @see OnlineModules
 */
class OnlineModulesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OnlineModules[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OnlineModules|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
