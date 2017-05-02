<?php

namespace Sat\Catalogos\Cfdi;

class TipoFactor extends \Sat\Catalogos\Base {
    protected static $db = [
        'Cuota' => ['labal' => 'Cuota'],
        'Exento' => ['labal' => 'Exento'],
        'Tasa' => ['labal' => 'Tasa'],
    ];

    public static function getLabelById($value) {
        if (isset(static::$db[$value])) {
            return $value;
        } else {
            return null;
        }
    }
}