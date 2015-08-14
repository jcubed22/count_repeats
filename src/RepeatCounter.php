<?php
    class RepeatCounter
    {
        function countRepeats($string, $keyword)
        {
            $count = 0;
            $string_array = explode(" ", $string);
            foreach($string_array as $search_string) {
                if (preg_match(strtolower("/\b$keyword\b/"), strtolower($search_string))) {
                    $count += 1;
                }
            }

            return $count;

            /* I was really stoked about solving this entire thing with one line, but unfortunately I forgot to make sure it didn't return partial matches until the I reread the prompt at the very end.  It could have been so beautiful.
            return substr_count(strtolower($string), strtolower($keyword)); */
        }
    }
?>
