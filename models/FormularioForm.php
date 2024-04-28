<?php
namespace app\models;
use yii\base\Model;

class FormularioForm extends Model {
    public $valorA;
    public $valorB;

    public function rules () {
        return [
            [['valorA', 'valorB'], 'required'],
            ['valorA', 'number'], ['valorB', 'number'],
        ];
    }
}

?>