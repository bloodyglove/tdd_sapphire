<?php
require_once 'Captcha.php';
require_once 'Randomizer.php';
class CaptchaService {
  private $random;

  function setRandom($random) {
    $this->random = $random;
  }

  function __construct() {
    $this->random = new Randomizer();
  }

  function randomCaptcha() {
    $random = $this->random;
    return new Captcha($random->operand(), $random->operator(), $random->operand());
  }
}
