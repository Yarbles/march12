<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_score_a()
        {
        //Arrange
        $test_Scrabble = new Scrabble;
        $input = "a";

        //Act
        $result = $test_Scrabble->score($input);

        //Assert
        $this->assertEquals(1, $result);
        }
        function test_score_aa()
        {
        //Arrange
        $test_Scrabble = new Scrabble;
        $input = "aa";

        //Act
        $result = $test_Scrabble->score($input);

        //Assert
        $this->assertEquals(2, $result);
        }
        function test_score_ab()
        {
        //Arrange
        $test_Scrabble = new Scrabble;
        $input = "ad";

        //Act
        $result = $test_Scrabble->score($input);

        //Assert
        $this->assertEquals(3, $result);
        }
        function test_score_poop()
        {
        //Arrange
        $test_Scrabble = new Scrabble;
        $input = "poop";

        //Act
        $result = $test_Scrabble->score($input);

        //Assert
        $this->assertEquals(8, $result);
        }
    }
?>
