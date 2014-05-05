<?php

class Captcha {
  private $first;
  private $second;
  private $operator;

  function __construct($first, $operator, $second) {
    $this->first = $first;
    $this->second = $second;
    $this->operator = $operator;
  }

  function result() {
    if ($this->operator == 2) {
      return $this->first * $this->second;
    }
    return $this->first + $this->second;
  }

}
