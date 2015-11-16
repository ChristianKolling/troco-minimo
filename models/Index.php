<?php

namespace app\models;

use yii\base\Model;

class Index extends Model {
    protected $moedas = array(
        'R$ 100' => 100,
        'R$ 50' => 50,
        'R$ 20' => 20,
        'R$ 10' => 10,
        'R$ 5' => 5,
        'R$ 2' => 2,
        'R$ 1' => 1,
    );
    public function getMoedas() {
        return $this->moedas;
    }
    public function getMinimoNumeroDeMoedas($val) {
        $valor = $val['valor'];
        $moedas = array();
        foreach ($this->getMoedas() as $denominacaoMoeda => $moedaValor) {
            $moedas[$denominacaoMoeda] = 0;
            if ($valor && $valor >= $moedaValor) {
                $total = intval($valor / $moedaValor);
                $valor = $valor - ($moedaValor * $total);
                $moedas[$denominacaoMoeda] = $total;
            }
        }
        return array(
            'moedas' => $moedas
        );
    }

}
