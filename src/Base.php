<?php

namespace Sat\Catalogos;

class Base {
    protected static $db = [];

    public static function getById($id) {
        if (isset(static::$db[$id])) {
            return static::$db[$id];
        } else {
            return null;
        }
    }

    public static function getList() {
        return static::$db;
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
        foreach (static::getList() as $value => $item) {
            $data = ["value='$value'"];
            foreach ($options['data'] as $v) $data[] = "data-{$v}='" . addslashes($item[$v]) . "'";
            $data = implode(' ', $data);
            $output .= '<option ' . $data . '>' . static::getLabelById($value) . '</option>';
        }
        return $output;
    }

    public static function getLabelById($value) {
        if (isset(static::$db[$value])) {
            return $value . ' - ' . static::$db[$value]['label'];
        } else {
            return null;
        }
    }
}