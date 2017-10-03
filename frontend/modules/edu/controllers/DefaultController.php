<?php

namespace app\modules\edu\controllers;

use app\models\ModulesSearch;
use app\models\OfflineModules;
use frontend\models\EduModule;
use yii\web\Controller;

/**
 * Default controller for the `edu` module
 */
class DefaultController extends Controller
{
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

    /**
     * @return mixed
     *
     */
    public function actionProtocolvisualizer()
    {
        $test_data1=OfflineModules::find()->all();
        $module=new EduModule();
        $module->setData($test_data1[0]);
        return $this->render('offline_module',['edu_module'=> $module]);
    }

    public function actionSamoproveryaemye_zadachi_po_kombinatorike(){
        $test_data1=OfflineModules::find()->all();
        $module=new EduModule();
        $module->setData($test_data1[0]);
        return $this->render('offline_module',['edu_module'=> $module]);
    }
}
