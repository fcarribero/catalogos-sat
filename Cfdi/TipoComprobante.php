<?php

namespace Sat\Catalogos\Cfdi;

class TipoComprobante extends \Sat\Catalogos\Base {
    protected static $db = [
        'E' => ['label' => 'Egreso', 'valor_maximo' => '20000000'],
        'I' => ['label' => 'Ingreso', 'valor_maximo' => '20000000'],
        'N' => ['label' => 'Nómina', 'valor_maximo' => '2000000'],
        'P' => ['label' => 'Pago', 'valor_maximo' => '0'],
        'T' => ['label' => 'Traslado', 'valor_maximo' => '0'],
    ];
}