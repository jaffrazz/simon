<?php

namespace frontend\controllers;

use Yii;
use backend\models\TblPembangunan;
use backend\models\TblDanaInfrastruktur;
use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

/**
 * PembangunanController implements the CRUD actions for TblPembangunan model.
 */
class BangunanController extends Controller
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
                    'get-bangunan' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all TblPembangunan models.
     * @return mixed
     */
    public function actionGetBangunan()
    {
        $token = Yii::$app->request->get('token');
        $user = User::findIdentityByAccessToken($token);
        if ($user!==null) {

            $id_pembangunan = Yii::$app->request->get('id_pembangunan');
            $model = TblPembangunan::findOne(['id_pembangunan'=>$id_pembangunan]);
            $modDana = $model->danaPembangunan;


            $data = [
                'success' => 1,
                'message' => 'Detail Dana Berhasil diambil',
                'data' => [
                    'id_pembangunan' => $model->id_pembangunan,
                    'id_dana_inf' => $modDana->nama_dana,
                    'nama_pembangunan' => $model->nama_pembanguna,
                    'foto' => $model->foto,
                    'lat' => $model->lat,
                    'lng' => $model->lng,
                    'anggaran' => $model->anggaran,
                    'tgl_mulai' => $model->tgl_mulai,
                    'tgl_selesai' => $model->tgl_selesai,
                    'keterangan' => $model->keterangan
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