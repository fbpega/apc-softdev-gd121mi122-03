<?php

namespace frontend\controllers;

use Yii;
use common\models\Officialbusiness;
use common\models\SearchOfficialbusiness;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * OfficialbusinessController implements the CRUD actions for Officialbusiness model.
 */
class OfficialbusinessController extends Controller
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
     * Lists all Officialbusiness models.
     * @return mixed
     */
    public function actionIndex()
    {
        if( Yii::$app->user->can('view-officialbusiness'))
        {
            $searchModel = new SearchOfficialbusiness();
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
     * Displays a single Officialbusiness model.
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
     * Creates a new Officialbusiness model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if( Yii::$app->user->can('create-officialbusiness'))
        {
            $model = new Officialbusiness();

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
     * Updates an existing Officialbusiness model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if( Yii::$app->user->can('update-officialbusiness'))
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
     * Deletes an existing Officialbusiness model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if( Yii::$app->user->can('delete-officialbusiness'))
        {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }else
        {
        throw new ForbiddenHttpException;
        }
    }
    
    /**
     * Finds the Officialbusiness model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Officialbusiness the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Officialbusiness::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
