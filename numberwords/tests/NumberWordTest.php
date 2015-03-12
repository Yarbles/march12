<?php

require_once "src/NumberWord.php";
class NumberWordTest extends PHPUnit_Framework_TestCase
{
    function test_wordify_one()
    {
    //Arrange
    $test_NumberWord = new NumberWord;
    $input = "1";

    //Act
    $result = $test_NumberWord->wordify($input);

    //Assert
    $this->assertEquals("one", $result);
    }
}

?>
