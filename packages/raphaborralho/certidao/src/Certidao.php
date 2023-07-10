<?php

namespace raphaborralho\certidoes;

use Illuminate\Support\Facades\Http;

class Certidao
{
    /**
     * @param $cpfcnpj
     * @return void
     */
    public static function certidaoTRF($cpfcnpj)
    {
        return Http::get()->json();
    }
}
