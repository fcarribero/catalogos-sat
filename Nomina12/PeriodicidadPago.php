<?php

namespace Sat\Catalogos\Nomina12;

use Sat\Catalogos\Base;

class PeriodicidadPago extends Base {
    protected static $db = [
        '01' => ['label' => 'Diario'],
        '02' => ['label' => 'Semanal'],
        '03' => ['label' => 'Catorcenal'],
        '04' => ['label' => 'Quincenal'],
        '05' => ['label' => 'Mensual'],
        '06' => ['label' => 'Bimestral'],
        '07' => ['label' => 'Unidad obra'],
        '08' => ['label' => 'Comisión'],
        '09' => ['label' => 'Precio alzado'],
        '10' => ['label' => 'Decenal'],
        '99' => ['label' => 'Otra Periodicidad'],
    ];
}