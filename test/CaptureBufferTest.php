<?php

namespace Donut\Util\Test;

use Donut\Util as u;

class CaptureBufferTest extends \PHPUnit_Framework_TestCase {

  public function test_capture_buffer_is_defined() {
    $actual = function_exists('\Donut\Util\capture_buffer');
    $this->assertTrue($actual);
  }

  public function test_captures_buffer_from_script() {
    $actual = u\capture_buffer("test/fake.php");
    $this->assertSame("hello world", $actual);
  }

  public function test_capture_buffer_from_script_multiple_times() {
    $actual = u\capture_buffer("test/fake.php");
    $this->assertSame("hello world", $actual);

    $another = u\capture_buffer("test/fake.php");
    $this->assertSame("hello world", $another);
  }

}
