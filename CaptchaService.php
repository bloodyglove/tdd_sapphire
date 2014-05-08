<?php
require_once 'Captcha.php';
require_once 'Randomizer.php';
class CaptchaService {
  private $random;

  function setRandom($random) {
    $this->random = $random;
  }

  function __construct($myRandom) {
    //$this->random = new Randomizer();
    $this->random = $myRandom;
  }

  function randomCaptcha() {
    $random = $this->random;
    return new Captcha($random->operand(), $random->operator(), $random->operand());
  }
}
