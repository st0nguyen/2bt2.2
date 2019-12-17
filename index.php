<?php
function findMin($arr)
{
//    static $i, $min;

     $min = $arr[0] ;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            return $i;
        }
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Tiêu đề trang web</title>
</head>

<body>
<form method="post">
    <fieldset>

    </fieldset>
</form>
</body>
</html>