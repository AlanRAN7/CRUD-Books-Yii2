<?php

namespace app\controllers;

// Controladores para la aplicación web
use Yii;
use yii\filters\AccessController;
use yii\web\Controller;

// Datos para la base de datos
use app\models\FormularioForm;

class SitioController extends Controller{

    public function actionInicio(){
        $model = new FormularioForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $valorRespuesta = ("El resultado de la suma es: ". $model -> valorA + $model -> valorB);
            return $this->render('inicio', ['mensaje' => $valorRespuesta, 'model' => $model]);
        }
        return $this->render('inicio', ['model' => $model]);
    }
}
?>