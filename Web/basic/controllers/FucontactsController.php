<?php

namespace app\controllers;

use Yii;
use app\models\FuContacts;
use app\models\FuContactsSearch;
use app\models\UploadContacts;
use app\models\FuInsititution;
use app\models\FuInsititutionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * FucontactsController implements the CRUD actions for FuContacts model.
 */
class FucontactsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all FuContacts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FuContactsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $uploadmodel = new UploadContacts();

        if (Yii::$app->request->isPost) {
            $uploadmodel->txtFile = UploadedFile::getInstance($uploadmodel, 'txtFile');
            if ($uploadmodel->upload()) {
                // file is uploaded successfully
//                return;
            }
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'uploadmodel' => $uploadmodel,
        ]);
    }

    /**
     * Displays a single FuContacts model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FuContacts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FuContacts();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FuContacts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $searchModel = new FuInsititutionSearch();
        $instinames = array_values($searchModel->getIdNames());
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'instinames'=>$instinames,
            ]);
        }
    }

    /**
     * Deletes an existing FuContacts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FuContacts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FuContacts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FuContacts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
