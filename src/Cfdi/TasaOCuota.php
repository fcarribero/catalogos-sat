<?php

namespace Sat\Catalogos\Cfdi;

class TasaOCuota extends \Sat\Catalogos\Base {
    protected static $db = [
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0', 'impuesto' => 'IVA', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.16', 'impuesto' => 'IVA', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Rango', 'valor_minimo' => '0', 'valor_maximo' => '0.16', 'impuesto' => 'IVA', 'factor' => 'Tasa', 'traslado' => 'No', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.265', 'impuesto' => 'IEPS', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.3', 'impuesto' => 'IEPS', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.53', 'impuesto' => 'IEPS', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.5', 'impuesto' => 'IEPS', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '1.6', 'impuesto' => 'IEPS', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.304', 'impuesto' => 'IEPS', 'factor' => 'Tasa', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.35', 'impuesto' => 'IEPS', 'factor' => 'Cuota', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.0591', 'impuesto' => 'IEPS', 'factor' => 'Cuota', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '3', 'impuesto' => 'IEPS', 'factor' => 'Cuota', 'traslado' => 'Sí', 'retencion' => 'Sí'],
        ['tipo' => 'Fijo', 'valor_minimo' => '0', 'valor_maximo' => '0.2988', 'impuesto' => 'IEPS', 'factor' => 'Cuota', 'traslado' => 'Sí', 'retencion' => 'Sí'],
    ];
}