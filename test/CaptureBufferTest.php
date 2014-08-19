<?php

namespace Donut\Util\Test;

use Donut\Util as u;

class CaptureBufferTest extends \PHPUnit_Framework_TestCase {

  public function test_capture_buffer_is_defined() {
    $actual = function_exists('\Donut\Util\capture_buffer');
    $this->assertTrue($actual);
  }

}
