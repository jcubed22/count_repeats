<?php
    class RepeatCounter
    {
        function countRepeats($string, $keyword)
        {
            return substr_count(strtolower($string), strtolower($keyword));
        }
    }
?>
