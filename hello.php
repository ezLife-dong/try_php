<!DOCTYPE html>
<html>
<body>

<h1>我的第一张 PHP 页面</h1>

<?php
echo "Hello World!";
?>

<?php

function serial()
{
    $arr1 = $arr1 = [1, 2, 3];
    $arr2 = ['big', 'small'];
    sort($arr1);
    $count = count($arr2);
    for ($i = 1; $i < count($arr1); $i++) {
        if ($arr1[$i] - $arr1[$i - 1] != 1) {
            $count = $count - ($arr1[$i] - $arr1[$i - 1] - 1);
            if ($count < 0) {
                return false;
            }
        }
    }
    return true;
}
1234
?>

</body>
</html>
