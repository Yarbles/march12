<?php
    class Scrabble
    {
        function score($input)
        {
            $outcome_array = array();
            $inputu = strtoupper($input);
            $letters = str_split($inputu);
            foreach ($letters as $letter) {
                if (($letter == "A") || ($letter == "E") || ($letter == "I") || ($letter == "O") || ($letter == "U") || ($letter == "L") || ($letter == "N") || ($letter == "R") || ($letter == "S") || ($letter == "T")) {
                    array_push($outcome_array, 1);
                }
                elseif (($letter == "D") || ($letter == "G")) {
                    array_push($outcome_array, 2);
                }
                elseif (($letter == "B") || ($letter == "C") || ($letter == "M") || ($letter == "P")) {
                    array_push($outcome_array, 3);
                }
                elseif (($letter == "F") || ($letter == "H") || ($letter == "V") || ($letter == "W") || ($letter == "Y")) {
                    array_push($outcome_array, 4);
                }
                elseif ($letter == "K") {
                    array_push($outcome_array, 5);
                }
                elseif (($letter == "J") || ($letter == "X")) {
                    array_push($outcome_array, 8);
                }
                elseif (($letter == "Q") || ($letter == "Z")) {
                    array_push($outcome_array, 10);
                }
            };
            $final_score = array_sum($outcome_array);
            return $final_score;
        }
    }
?>
