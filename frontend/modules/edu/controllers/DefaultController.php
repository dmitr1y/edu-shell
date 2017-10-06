<?php

namespace app\modules\edu\controllers;

use app\models\ModulesSearch;
use app\models\OfflineModules;
use app\models\OnlineModules;
use app\models\OnlineModulesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `edu` module
 */
class DefaultController extends Controller
{
    protected function findModelBySlug($slug)
    {
        if (($model = OfflineModules::findOne(['slug' => $slug])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException();
        }
    }

    protected function findOnlineModelBySlug($slug)
    {
        if (($model = OnlineModules::findOne(['slug' => $slug])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException();
        }
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $offline_modules=ModulesSearch::find()
            ->all();
        $online_modules=OnlineModulesSearch::find()->all();

        $count_offline=ModulesSearch::find()->count();
        $count_online=OnlineModulesSearch::find()->count();
        return $this->render('modules', ['offline_modules' => $offline_modules, 'offline_count' => $count_offline,
            'online_modules' => $online_modules, 'online_count' => $count_online]);
    }

    public function actionOffline($slug){
        return $this->render('offline_module',[
            'model' => $this->findModelBySlug($slug),
        ]);
    }

    public function actionOnline($slug){
        return $this->render('online_module',[
            'model' => $this->findOnlineModelBySlug($slug),
        ]);
    }
}
