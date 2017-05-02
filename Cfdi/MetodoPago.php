<?php

namespace Sat\Catalogos\Cfdi;

class MetodoPago extends \Sat\Catalogos\Base {
    protected static $db = [
        'PPD' => ['label' => 'Pago en parcialidades o diferido'],
        'PUE' => ['label' => 'Pago en una sola exhibición'],
        'PIP' => ['label' => 'Pago inicial y parcialidades'],
    ];
}