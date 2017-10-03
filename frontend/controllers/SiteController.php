<?php
namespace frontend\controllers;

use app\models\ModulesSearch;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    /**
     * Displays lectures page.
     *
     * @return string
     */
    public function actionLectures()
    {
        return $this->render('lectures');
    }

    /*
    * =======================================
    *             ONLINE   MODULES
    * =======================================
    */

    /**
     * Displays StrassenVizi module
     *
     * @return string
     */

    public function actionStrassen()
    {
        $this->layout='online_modules';
        return $this->render('/edu_modules/StrassenVizi/index');
    }

    /**
     * Displays drawing-graph module
     *
     * @return string
     */
    public function actionDrawing_graph()
    {
        return $this->render('/edu_modules/drawing-graph/index');
    }

    /**
     * Displays graph-tasks module
     *
     * @return string
     */
    public function actionGraph_tasks()
    {
        return $this->render('/edu_modules/graph-tasks/index');
    }

    /**
     * Displays HEXPLORE game module
     *
     * @return string
     */
    public function actionHexplore()
    {
//        $this->layout='online_modules';css
        return $this->render('/edu_modules/HEXPLORE/index');
    }

    /**
     * Displays big-integer-math-gh-pages game module
     *
     * @return string
     */
    public function actionBiginteger()
    {
        return $this->render('/edu_modules/big-integer-math-gh-pages/index');
    }

    /**
     * Displays alternative-exam-gh-pages game module
     *
     * @return string
     */
    public function action1to1relations()
    {
        return $this->render('/edu_modules/alternative-exam-gh-pages/index');
    }


    /*
     * =======================================
     *             OFFLINE   MODULES
     * =======================================
     */

    /**
     * Displays ProtocolVisualizer module
     *
     * @return string
     */
    public function actionProtocolvisualizer()
    {
        $module=new EduModule();

        $test_data=Yii::$app->db->createCommand('SELECT * FROM offline_modules');
//            ->select('m_name, m_description, m_libs')
//            ->from('offline_modules')
////            ->join('tbl_profile p', 'u.id=p.user_id')
//            ->where('id=1')
//            ->queryRow();

        $test_data1=$test_data->query()->readAll();
//        $test_data1=$test_data->
        $module->setData($test_data1[0]);
//        var_dump($test_data1);

//        exit;
        return $this->render('offline_module',[
            'edu_module'=> $module
        ]);
    }
}
