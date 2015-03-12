<?php

    class NumberWord
        {
            function wordify($input)
                {
                    $array = array();
                    $called_number = array_push($array, $input);
                    $wide_array = str_split($called_number);
                    $digitcount = count($wide_array);
                        if ($digitcount == 1) {
                            switch($input) {
                                case 0:
                                    return "zero";
                                case 1:
                                    return "one";
                                case 2:
                                    return "two";
                                case 3:
                                    return "three";
                                case 4:
                                    return "four";
                                case 5:
                                    return "five";
                                case 6:
                                    return "six";
                                case 7:
                                    return "seven";
                                case 8:
                                    return "eight";
                                case 9:
                                    return "nine";
                                }
                            }
                        elseif ($digitcount == 2) {
                            switch($input) {
                                case 10:
                                    return "ten";
                                case 20:
                                    return "twenty";
                                case 30:
                                    return "thirty";
                                case 40:
                                    return "forty";
                                case 50:
                                    return "fifty";
                                case 60:
                                    return "sixty";
                                case 70:
                                    return "seventy";
                                case 80:
                                    return "eighty";
                                case 90:
                                    return "ninety";
                                }
                            }
                        }
    }
?>
