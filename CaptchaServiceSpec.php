<?php
require_once 'CaptchaService.php';
class CaptchaServiceSpec extends PHPUnit_Framework_TestCase {
  function testRandomCaptchaShouldReturnInstanceofCaptcha() {
    $captchaService = new CaptchaService();
    $this->assertTrue($captchaService->randomCaptcha() instanceof Captcha);
  }
/*
  function testRandomOperandShouldReturnInRange1to9() {
    $captchaService = new CaptchaService();
    $captcha = $captchaService->randomCaptcha();
    $this->assertEquals(4, $captcha->result());
  }
 */

  function testRandomOperandShouldReturnInRange1to9() {
    $captchaService = new CaptchaService();
    $mockRandom = $this->getMock('Randomizer');
    $mockRandom->expects($this->any())
               ->method('operand')
               ->will($this->returnValue(2));
    $mockRandom->expects($this->once())
               ->method('operator')
               ->will($this->returnValue(1));
    $captchaService->setRandom($mockRandom);
    $captcha = $captchaService->randomCaptcha();
    $this->assertEquals(4, $captcha->result());
  }
}
