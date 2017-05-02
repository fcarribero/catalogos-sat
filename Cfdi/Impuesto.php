<?php

namespace Sat\Catalogos\Cfdi;

class Impuesto extends \Sat\Catalogos\Base {
    protected static $db = [
        '001' => ['label' => 'ISR', 'retencion' => 'Si', 'traslado' => 'No', 'tipo' => 'Federal', 'entidad' => null],
        '002' => ['label' => 'IVA', 'retencion' => 'Si', 'traslado' => 'Si', 'tipo' => 'Federal', 'entidad' => null],
        '003' => ['label' => 'IEPS', 'retencion' => 'Si', 'traslado' => 'Si', 'tipo' => 'Federal', 'entidad' => null],
    ];
}