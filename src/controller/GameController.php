<?php

class GameController extends BaseController
{
  public function ping()
  {
    $this->send([ 'message' => 'PONG' ], [ HTTP_HEADER_OK ]);
  }

  public function pong()
  {
    $this->send([ 'message' => 'PING' ], [ HTTP_HEADER_OK ]);
  }
}