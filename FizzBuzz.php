<?php

class FizzBuzz {
  function say($input) {
    if ($input % 15 == 0) {
      return 'FIZZBUZZ';
    }
    if ($input % 3 == 0) {
      return 'FIZZ';
    } else if ($input % 5 == 0) {
      return 'BUZZ';
    } 
    return $input;
  }
}
