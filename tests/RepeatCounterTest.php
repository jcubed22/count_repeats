<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_count_repeats_none()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $keyword = "Zimbabwe";
            $string = "Hello";

            //Act
            $result = $test_countRepeats->countRepeats($string, $keyword);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_count_repeats_one()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $keyword = "Hello";
            $string = "Hello";

            //Act
            $result = $test_countRepeats->countRepeats($string, $keyword);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_count_repeats_two()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $keyword = "Hello";
            $string = "Hello Hello";

            //Act
            $result = $test_countRepeats->countRepeats($string, $keyword);

            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>
