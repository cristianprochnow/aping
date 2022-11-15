<?php

class Collection
{
  static public function get($array, string $arrayIndex, $defaultValue = '')
  {
    $value = $defaultValue;

    if (isset($array[$arrayIndex]) && $array[$arrayIndex]) {
      $value = $array[$arrayIndex];
    }

    return $value;
  }
}