<?php

namespace app\modules\edu\controllers;

use app\models\ModulesSearch;
use app\models\OfflineModules;
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

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $offline_modules=ModulesSearch::find()
            ->all();
        $count=ModulesSearch::find()->count();
        return $this->render('modules', ['module' => $offline_modules, 'modules_count' => $count]);
    }

    public function actionOffline($slug){
        return $this->render('offline_module',[
            'model' => $this->findModelBySlug($slug),
        ]);
    }
}
