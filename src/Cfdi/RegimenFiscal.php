<?php

namespace Sat\Catalogos\Cfdi;

class RegimenFiscal extends \Sat\Catalogos\Base {
    protected static $db = [
        '601' => ['label' => 'General de Ley Personas Morales', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '603' => ['label' => 'Personas Morales con Fines no Lucrativos', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '605' => ['label' => 'Sueldos y Salarios e Ingresos Asimilados a Salarios', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '606' => ['label' => 'Arrendamiento', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '607' => ['label' => 'Régimen de Enajenación o Adquisición de Bienes', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '608' => ['label' => 'Demás ingresos', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '609' => ['label' => 'Consolidación', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '610' => ['label' => 'Residentes en el Extranjero sin Establecimiento Permanente en México', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '611' => ['label' => 'Ingresos por Dividendos (socios y accionistas)', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '612' => ['label' => 'Personas Físicas con Actividades Empresariales y Profesionales', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '614' => ['label' => 'Ingresos por intereses', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '615' => ['label' => 'Régimen de los ingresos por obtención de premios', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '616' => ['label' => 'Sin obligaciones fiscales', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '620' => ['label' => 'Sociedades Cooperativas de Producción que optan por diferir sus ingresos', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '621' => ['label' => 'Incorporación Fiscal', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '622' => ['label' => 'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '623' => ['label' => 'Opcional para Grupos de Sociedades', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '624' => ['label' => 'Coordinados', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2016-11-12', 'fecha_fin_vigencia' => null],
        '628' => ['label' => 'Hidrocarburos', 'aplica_fisica' => 'No', 'aplica_moral' => 'Sí', 'fecha_inicio_vigencia' => '2020-01-01', 'fecha_fin_vigencia' => null],
        '629' => ['label' => 'De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2020-01-01', 'fecha_fin_vigencia' => null],
        '630' => ['label' => 'Enajenación de acciones en bolsa de valores', 'aplica_fisica' => 'Sí', 'aplica_moral' => 'No', 'fecha_inicio_vigencia' => '2020-01-01', 'fecha_fin_vigencia' => null],
    ];
}