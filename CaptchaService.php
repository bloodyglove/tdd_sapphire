<?php
require_once 'Captcha.php';
require_once 'Randomizer.php';
class CaptchaService {

  function randomCaptcha() {
    $random = new Randomizer();
    return new Captcha($random->operand(), $random->operator(), $random->operand());
  }
}
