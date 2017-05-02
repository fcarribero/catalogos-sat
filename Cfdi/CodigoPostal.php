<?php

namespace Sat\Catalogos\Cfdi;

use Illuminate\Support\Facades\DB;

class CodigoPostal extends \Sat\Catalogos\Base {
    private static $table = 'catalogos_cfdi_codigopostal';

    public static function getById($id) {
        return DB::table(static::$table)->where('value', $id)->first();
    }

    public static function getList() {
        return DB::table(static::$table)->get();
    }

    public static function renderOptions($options = []) {
        $defaults = [
            'empty_option' => true,
            'data' => [],
        ];
        foreach ($defaults as $i => $v) {
            if (!isset($options[$i])) {
                $options[$i] = $v;
            }
        }
        $output = '';
        if ($options['empty_option']) {
            $output .= '<option></option>';
        }
        foreach (static::getList() as $item) {
            $output .= '<option value="' . $item->value . '">' . static::getLabelById($item->value) . '</option>';
        }
        return $output;
    }

    public static function getLabelById($value) {
        return $value;
    }
}