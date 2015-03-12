<?php

require_once "src/NumberWord.php";
class NumberWordTest extends PHPUnit_Framework_TestCase
{
    function test_wordify_one() {
    $test_NumberWord = new NumberWord;
    $input = 2;
    $result = $test_NumberWord->wordify($input);
    $this->assertEquals("two", $result);
    }
    function test_wordify_two() {
    $test_NumberWord = new NumberWord;
    $input = 10;
    $result = $test_NumberWord->wordify($input);
    $this->assertEquals("ten", $result);
    }
}

?>
