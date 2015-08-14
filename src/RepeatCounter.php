<?php
    class RepeatCounter
    {
        function countRepeats($string, $keyword)
        {
            return substr_count($string, $keyword);
        }
    }
?>
