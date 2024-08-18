<?php
function leetSpeak($str) {
    $search = array('A', 'B', 'E', 'G', 'L', 'S', 'T');
    $replace = array('4', '8', '3', '6', '1', '5', '7');
    $str = strtoupper($str);
    return str_replace($search, $replace, $str);
}

echo leetSpeak("Hello BATman");
?>