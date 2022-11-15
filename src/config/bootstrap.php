<?php

require_once(__DIR__.'/constants.inc');

foreach (glob(PROJECT_ROOT_PATH.'/src/helper/*.php') as $helper)
{
  require_once($helper);
}
foreach (glob(PROJECT_ROOT_PATH.'/src/controller/*.php') as $controller)
{
  require_once($controller);
}