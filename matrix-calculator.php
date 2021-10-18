<!doctype html>
<head>
    <title>Matrix Calculator using Array</title>
</head>
<?php
    $first_results = '';
    $second_results = '';
    $third_results = '';
    $fourth_results = '';
    $array2 = array(array("",""),
    array("","")
    );
    if (isset($_GET['button'])) {
        $first = $_GET['Number1_0'];
        $second = $_GET['Number2_0'];
        $third = $_GET['Number3_0'];
        $fourth = $_GET['Number4_0'];
        $fifth = $_GET['Number5_0'];
        $sixth = $_GET['Number6_0'];
        $seven = $_GET['Number7_0'];
        $eight = $_GET['Number8_0'];
        $math = $_GET['button'];
        if (is_numeric($first) && is_numeric($second) && is_numeric($third) && is_numeric($fourth) && is_numeric($fifth) && is_numeric($sixth) && is_numeric($seven) && is_numeric($eight)) {
            $array = array (
                array ($first, $second),
                array ($third, $fourth)
            );
            $array1 = array (
                array ($fifth, $sixth),
                array ($seven, $eight)
            );
            for($row=0; $row<sizeof($array); $row++) {
                $col_size = sizeof($array[$row]);
                for($col=0; $col<$col_size; $col++) {
                    if($math == "Addition") {
                        $array2 [$row] [$col] = $array [$row] [$col] + $array1 [$row] [$col];
                    }
                    else if ($math == "Subtraction") {
                        $array2 [$row] [$col] = $array [$row] [$col] - $array1 [$row] [$col];
                    }
                    else if ($math == "Multiplication") {
                        $array2 [$row] [$col] = $array [$row] [$col] * $array1 [$row] [$col];
                    }
                }
            }
        }
    }
    

?>
<body>
    <form method = "GET">
        <lavel> 1st Number </lavel>
        <input type = "Number" name = "Number1_0" step = "any" value = "<?php echo $first; ?>">
        <lavel> 2nd Number </lavel>
        <input type = "Number" name = "Number2_0" step = "any" value = "<?php echo $second; ?>">
        <br>
        <lavel> 3rd Number </lavel>
        <input type = "Number" name = "Number3_0" step = "any" value = "<?php echo $third; ?>">
        <lavel> 4th Number </lavel>
        <input type = "Number" name = "Number4_0" step = "any" value = "<?php echo $fourth; ?>">
        <br>
        <br>
        <lavel> 5th Number </lavel>
        <input type = "Number" name = "Number5_0" step = "any" value = "<?php echo $fifth; ?>">
        <lavel> 6th Number </lavel>
        <input type = "Number" name = "Number6_0" step = "any" value = "<?php echo $sixth; ?>">
        <br>
        <lavel> 7th Number </lavel>
        <input type = "Number" name = "Number7_0" step = "any" value = "<?php echo $seven; ?>">
        <lavel> 8th Number </lavel>
        <input type = "Number" name = "Number8_0" step = "any" value = "<?php echo $eight; ?>">
        <br>
        <br>
        <lavel> First Results </lavel>
        <input name = "first_results" value = "<?php echo $array2 [0][0]; ?>">
        <lavel>Second Results </lavel>
        <input name = "second_results" value = "<?php echo $array2 [0][1]; ?>">
        <br>
        <lavel>Third Results </lavel>
        <input name = "third_results" value = "<?php echo $array2 [1][0]; ?>">
        <lavel>Fourth Results </lavel>
        <input name = "fourth_results" value = "<?php echo $array2 [1][1]; ?>">
        <br>
        <input type = "submit" name = "button" value = "Addition">
        <input type = "submit" name = "button" value = "Subtraction">
        <input type = "submit" name = "button" value = "Multiplication">
    </form>
</body>
</html>