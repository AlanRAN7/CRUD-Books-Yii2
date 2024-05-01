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
        $mensaje = null;
if($model->load(Yii::$app->request->post()) && $model->validate()){
    $valorRespuesta = ("El resultado de la suma es: ". $model -> valorA + $model -> valorB);
    $mensaje = $valorRespuesta;
    return $this->render('inicio', ['mensaje' => $mensaje, 'model' => $model]);
}
return $this->render('inicio', ['mensaje' => $mensaje, 'model' => $model]);

    }
}
?>