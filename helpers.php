<?php
/**
 * Encoding an array of strings to UTF-8
 * 
 * @param array $array The array of strings
 * 
 * @return array
 */
function utf8_encode_array($array)
{
    array_walk_recursive($array, function(&$item, $key) {
        if (!mb_detect_encoding($item, 'utf-8', true)) {
            $item = utf8_encode($item);
        }
    });

    return $array;
}