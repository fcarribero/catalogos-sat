<?php

namespace Sat\Catalogos\Cfdi;

class TipoRelacion extends \Sat\Catalogos\Base {
    protected static $db = [
        '03' => ['label' => 'Devolución de mercancía sobre facturas o traslados previos'],
        '06' => ['label' => 'Factura generada por los traslados previos'],
        '01' => ['label' => 'Nota de crédito de los documentos relacionados'],
        '02' => ['label' => 'Nota de débito de los documentos relacionados'],
        '04' => ['label' => 'Sustitución de los CFDI previos'],
        '05' => ['label' => 'Traslados de mercancias facturados previamente'],
    ];
}