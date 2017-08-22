<?php

  //calculator->one()->plus()->two()->minus()->three()->equals()

  class Calculator {
   
    private static $result = 0;
    private static $operator = "+";
    
    function one() {
      if(self::$operator == "+") {
         self::$result += 1;
      } else {
         self::$result -= 1;
      }
      
      return $this;
    }
    
    function two() {
      if(self::$operator == "+") {
         self::$result += 2;
      } else {
         self::$result -= 2;
      }
      
      return $this;
    }
    
    function three() {
      if(self::$operator == "+") {
         self::$result += 3;
      } else {
         self::$result -= 3;
      }
      
      return $this;
    }
    
    function minus() {
      self::$operator = "-";
      
      return $this;
    }
    
    function plus() {
      self::$operator = "+";
      
      return $this;
    }
    
    function equals() {
     
      echo self::$result;
    }
  }

  $calculator = new Calculator();
  $calculator->one()->plus()->two()->minus()->three()->minus()->one()->plus()->two()->equals();
?>


