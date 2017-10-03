<?php

namespace app\modules\edu\controllers;

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
        return $this->render('index');
    }
    public function actionProtocolvisualizer()
    {
//        echo 'WORK';
//        exit;
        $test_data1=OfflineModules::find()->all();
        $module=new EduModule();
//        var_dump($test_
//data1);
//        exit;
//        $test_data=Yii::$app->db->createCommand('SELECT * FROM offline_modules');
//            ->select('m_name, m_description, m_libs')
//            ->from('offline_modules')
////            ->join('tbl_profile p', 'u.id=p.user_id')
//            ->where('id=1')
//            ->queryRow();

//        $test_data1=$test_data->query()->readAll();
//        $test_data1=$test_data->
        $module->setData($test_data1[0]);
//        var_dump($test_data1);

//        exit;
        return $this->render('offline_module',[
            'edu_module'=> $module
        ]);
    }
}
