<?php
namespace KEINOS\SCRUTINIZER;

function parrotry($string)
{
    return $string;
}

function getValue($key, array $array, $default = null)
{
    return isset($array[$key]) ? $array[$key] : $default;
}
