<?php

class BaseController
{
  public function __call($name, $arguments)
  {
    $this->send(null, [HTTP_HEADER_NOT_FOUND]);
  }

  public function send($data = null, $httpHeaders = [])
  {
    header_remove('Set-Cookie');
    array_push($httpHeaders, 'Content-Type: application/json; charset=utf-8');

    if (is_array($httpHeaders) && count($httpHeaders)) {
      foreach ($httpHeaders as $httpHeader) {
          header($httpHeader);
      }
    }

    if ($data !== null) {
      echo json_encode($data);
    }
    exit;
  }
}