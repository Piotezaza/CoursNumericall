<?php

$multi = [[ 2 => 'deux', '3', 'quatre'], [5,6,7], ['x', 'y', 'z']];

echo $multi[0][3] + $multi[1][2] . $multi[2][1+1];