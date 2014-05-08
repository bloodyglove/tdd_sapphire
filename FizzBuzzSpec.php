<?php
require_once 'FizzBuzz.php';
class FizzBuzzSpec extends PHPUnit_Framework_TestCase {
  
  function test_1_1() {
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals(1, $fizzbuzz->say(1));
  }

  function test_2_2() {
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals(2, $fizzbuzz->say(2));
  }

  function test_3_FIZZ() {
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("FIZZ", $fizzbuzz->say(3));
  }
  
  function test_5_BUZZ() {
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("BUZZ", $fizzbuzz->say(5));
  }  

  function test_15_FIZZBUZZ() {
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("FIZZBUZZ", $fizzbuzz->say(15));
  }  

}
