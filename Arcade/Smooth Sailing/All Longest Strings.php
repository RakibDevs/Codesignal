<?

function allLongestStrings($inputArray) {
    $maxlen = max(array_map('strlen', $inputArray));    
    return array_values(array_filter($inputArray,function($v) use($maxlen){
        return strlen($v) == $maxlen;
    })); 
}


/*
Given an array of strings, return another array containing all of its longest strings.

Example

For inputArray = ["aba", "aa", "ad", "vcd", "aba"], 

the output should be
allLongestStrings(inputArray) = ["aba", "vcd", "aba"].
