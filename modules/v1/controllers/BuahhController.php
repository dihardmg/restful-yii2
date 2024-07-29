<?php
namespace app\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use Yii;
use app\models\Buah;

class BuahhController extends ActiveController
{
    public $modelClass = 'app\models\Buah';

    public function actions()
    {
        $actions = parent::actions();
        // Disable default actions if you need custom logic
        unset($actions['create'], $actions['update'], $actions['delete']);
        return $actions;
    }

    public function actionCreate()
    {
        $model = new Buah();
        $model->load(Yii::$app->request->getBodyParams(), '');
        
        if ($model->save()) {
            Yii::$app->response->statusCode = 201;
            return [
                'status' => 1,
                'message' => 'Created successfully',
                'data' => $model,
            ];
        } else {
            Yii::$app->response->statusCode = 422;
            return [
                'status' => 0,
                'message' => 'Validation failed',
                'data' => $model->errors,
            ];
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->load(Yii::$app->request->getBodyParams(), '');

        if ($model->save()) {
            return [
                'status' => 1,
                'message' => 'Updated successfully',
                'data' => $model,
            ];
        } else {
            Yii::$app->response->statusCode = 422;
            return [
                'status' => 0,
                'message' => 'Validation failed',
                'data' => $model->errors,
            ];
        }
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        if ($model->delete()) {
            Yii::$app->response->statusCode = 204;
            return [
                'status' => 1,
                'message' => 'Deleted successfully',
            ];
        } else {
            Yii::$app->response->statusCode = 422;
            return [
                'status' => 0,
                'message' => 'Failed to delete',
            ];
        }
    }

    protected function findModel($id)
    {
        $modelClass = $this->modelClass;
        if (($model = $modelClass::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested resource does not exist.');
    }
}
