<?php
namespace app\controllers;

use Yii;
use yii\base\Controller as Controller;
use app\models\Index;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $values = $request->post();
            $model = new Index();
            $valores = $model->getMinimoNumeroDeMoedas($values);
            return $this->render('index',array('moedas' => $valores['moedas']));
        }
        return $this->render('index',array('moedas' => array()));
    }
}
