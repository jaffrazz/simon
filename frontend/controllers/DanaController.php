<?php

namespace frontend\controllers;

use Yii;
use backend\models\TblDanaInfrastruktur;
use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

/**
 * PembangunanController implements the CRUD actions for TblPembangunan model.
 */
class DanaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'get-dana' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all TblPembangunan models.
     * @return mixed
     */
    public function actionGetDana()
    {
        $token = Yii::$app->request->get('token');
        $user = User::findIdentityByAccessToken($token);
        if ($user!==null) {

            $id_dana = Yii::$app->request->get('id_dana_inf');
            $model = TblDanaInfrastruktur::findOne(['id_dana_inf'=>$id_dana]);

            $data = [
                'success' => 1,
                'message' => 'Detail Dana Berhasil diambil',
                'data' => [
                    'id_dana_inf' => $model->id_dana_inf,
                    'nama_dana' => $model->nama_dana,
                    'jumlah' => $model->jumlah,
                    'rencana_penggunaan' => $model->rencana_penggunaan
                ],
            ];

        // echo "string";            
        } else {
            $data = [
                'success' => 0,
                'message' => 'Token tidak valid',
                'data' => [],
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($data);

    }
}