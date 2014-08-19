<?php

namespace Donut\Util;

function capture_buffer($filename) {
  ob_start();
  require $filename;
  return ob_get_clean();
}
