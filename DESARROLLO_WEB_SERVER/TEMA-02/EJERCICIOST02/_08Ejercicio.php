<?php

if ($a < $b) {
    print "a es menor que b";
} elseif ($a > $b) {
    print "a es mayor que b";
} else {
    print "a es igual a b";
}
echo '<br>';
var_dump($a);
echo '<br>';

switch ($a) {
    case 0:
        print "a vale 0";
        break;
    case 1:
        print "a vale 1";
        break;
    default:
        print "a no vale 0 ni 1";
}