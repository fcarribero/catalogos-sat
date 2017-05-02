<?php

namespace Sat\Catalogos\Cfdi;

class UsoCFDI extends \Sat\Catalogos\Base {
    protected static $db = [
        'D01' => ['label' => 'Honorarios médicos, dentales y gastos hospitalarios.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D02' => ['label' => 'Gastos médicos por incapacidad o discapacidad', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D03' => ['label' => 'Gastos funerales.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D04' => ['label' => 'Donativos.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D05' => ['label' => 'Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación).', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D06' => ['label' => 'Aportaciones voluntarias al SAR.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D07' => ['label' => 'Primas por seguros de gastos médicos.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D08' => ['label' => 'Gastos de transportación escolar obligatoria.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D09' => ['label' => 'Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'D10' => ['label' => 'Pagos por servicios educativos (colegiaturas)', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'G01' => ['label' => 'Adquisición de mercancias', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'G02' => ['label' => 'Devoluciones, descuentos o bonificaciones', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'G03' => ['label' => 'Gastos en general', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I01' => ['label' => 'Construcciones', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I02' => ['label' => 'Mobilario y equipo de oficina por inversiones', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I03' => ['label' => 'Equipo de transporte', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I04' => ['label' => 'Equipo de computo y accesorios', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I05' => ['label' => 'Dados, troqueles, moldes, matrices y herramental', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I06' => ['label' => 'Comunicaciones telefónicas', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I07' => ['label' => 'Comunicaciones satelitales', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'I08' => ['label' => 'Otra maquinaria y equipo', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-01-01', 'fecha_fin_vigencia' => null],
        'P01' => ['label' => 'Por definir', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2017-03-31', 'fecha_fin_vigencia' => null],
    ];
}