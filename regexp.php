<?php

$arr = [
    'а125км',
    'А125КМ',
    'б000ам',
    'a000am',
    'у777ха',
    'к351ек'
];

$matched = 0;
foreach ($arr as $gos_nomer) {
    if (preg_match('/[авекмнорстух]\d{3}[авекмнорстух]{2}/iu', $gos_nomer)) {
        $matched ++;

        echo $gos_nomer . ' - matched' . PHP_EOL;
    } else {
        echo $gos_nomer . ' - not matched' . PHP_EOL;
    }
}

echo PHP_EOL . 'matched ' . $matched . '/' . count($arr);