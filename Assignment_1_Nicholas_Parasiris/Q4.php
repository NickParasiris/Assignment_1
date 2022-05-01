<?php

    $text = "I was having a great day, but then I found out my favourite restuarant is closed today.";
    
    //Most common word
    $textArray = explode(" ",$text);
    
    $wordCount = array_count_values($textArray);
    
    asort($wordCount);
    
    echo "The most common word is (" . array_keys($wordCount)[(count($wordCount) - 1)] . ")" . " and ";
    
    //Longest word
    
    $wordLength = 0;
    $longestWord = '';

    foreach ($textArray as $word) {
         if (strlen($word) > $wordLength) {
            $wordLength = strlen($word);
            $longestWord = $word;
        }
    }

    echo "the longest word is (" . $longestWord . ").";

?>