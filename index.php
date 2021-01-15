<?php
$x = array();
$y = array();
$z = array();

$t = 3;


function input_random(&$arr) {
    for ($i = 0; $i <= 10; ++$i) {
        $arr[] = rand(1, 100);
    }
}

input_random($x);
input_random($y);

function is_prime($n) {
    for ($x = 2; $x <= $n / 2; $x++) {
        if ($n % $x == 0) {
            return false;
        }
    }
    return true;
}

$min_el1 = $y[0];
$min_index1 = 0;

$min_el2 = $y[1];
$min_index2 = 0;

$min_el3 = $y[2];

function find_min_el1(&$arr, &$min_el1, &$min_el2, &$min_el3, &$min_index1, &$min_index2) {
    for ($i = 0; $i < count($arr); ++$i) {
        if (is_prime($arr[$i])) {
            if ($arr[$i] < $min_el1) {
                $min_el1 = $arr[$i];
                $min_index1 = $i;
            }
        }
    }

    for ($i = 0; $i < count($arr); ++$i) {
        if (is_prime($arr[$i])) {
            if ($arr[$i] < $min_el2) {
                if ($i != $min_index1) {
                    $min_el2 = $arr[$i];
                    $min_index2 = $i;
                }
            }
        }
    }

    for ($i = 0; $i < count($arr); ++$i) {
        if (is_prime($arr[$i])) {
            if ($arr[$i] < $min_el3) {
                if ($i != $min_index2) {
                    $min_el3 = $arr[$i];
                }
            }
        }
    }
}

find_min_el1($y, $min_el1, $min_el2, $min_el3, $min_index1, $min_index2);

echo '<br>Элемент первый: '.$min_el1.'<br>';
echo 'Элемент второй: '.$min_el2.'<br>';
echo 'Элемент третий: '.$min_el3;

function rewrite_numbers(&$x, &$z) {
    foreach ($x as $el) {
        $current = (string)$el;

        if (stristr($current, '1') and stristr($current, '1')) {
            $z[] = $el;
        }
    }
}

rewrite_numbers($x, $z);

echo '<br><br>Массив Z:<br><pre>';
print_r($z);
echo '<pre>';

function del_element(&$arr) {
    for ($i = 0; $i < count($arr); ++$i) {
        if ($arr[$i] % 2 == 0) {
            ;
        } else {
            unset($arr[$i]);
        }
    }
}

del_element($z);

echo '<br><br>Измененный массив Z:<br><pre>';
print_r($z);
echo '<pre>';

?>

