<?php

class Randomizer {
  function operand() {
    return rand(1, 9);
  }

  function operator() {
    return rand(1, 2);
  }
}
