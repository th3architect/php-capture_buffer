<?php

namespace Donut\Util;

function capture_buffer($filename) {
  ob_start();
  require_once $filename;
  return ob_get_clean();
}
