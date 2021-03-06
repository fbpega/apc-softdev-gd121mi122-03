<?php

namespace frontend\controllers;

use Yii;
use common\models\Cashvoucher;
use common\models\SearchCashvoucher;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * CashvoucherController implements the CRUD actions for Cashvoucher model.
 */
class CashvoucherController extends Controller
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
     * Lists all Cashvoucher models.
     * @return mixed
     */
    public function actionIndex()
    {
        if( Yii::$app->user->can('view-cashvoucher'))
        {

            $searchModel = new SearchCashvoucher();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }else
        {
            throw new ForbiddenHttpException;
        }
    }
        

    /**
     * Displays a single Cashvoucher model.
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
     * Creates a new Cashvoucher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if( Yii::$app->user->can('create-cashvoucher'))
        {
            $model = new Cashvoucher();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }else
        {
            throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Updates an existing Cashvoucher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if( Yii::$app->user->can('update-cashvoucher'))
        {

            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else
        {
            throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Deletes an existing Cashvoucher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if( Yii::$app->user->can('delete-cashvoucher'))
        {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);        
        }else
        {
            throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Finds the Cashvoucher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cashvoucher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cashvoucher::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
