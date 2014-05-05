<?php

require_once 'Captcha.php';

class CaptchaTest extends PHPUnit_Framework_TestCase {
  function test1plus1equal2() {
    $captcha = new Captcha(1, 1, 1);
    $this->assertEquals(2, $captcha->result());
  }

  function test1plus2equal3() {
    $captcha = new Captcha(1, 1, 2);
    $this->assertEquals(3, $captcha->result());
  }

  function test2multiply4equal8() {
    $captcha = new Captcha(2, 2, 4);
    $this->assertEquals(8, $captcha->result());
  }

}
