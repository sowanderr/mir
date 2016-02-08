<?php
namespace backend\controllers;
use backend\models\Dir;
use Yii;
use yii\web\Controller;
use backend\models\UploadForm;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\helpers\FileHelper;
use app;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'main';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'upload','pdf','show'],
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
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                // file is uploaded successfully
                return $this->render('index');
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
    public function actionPdf()
    {   //$searchModel = new OtdelsSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->layout = 'pdf';
        $html = $this->render('show');
            //'searchModel' => $searchModel,
            //'dataProvider' => $dataProvider]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $html;
        return $pdf->render();

    }
    public function actionShow(){
            $this->layout = 'pdf';
            $model = FileHelper::findFiles('./uploads');


        return $this->render('show', ['model'=> $model]);
    }
}
