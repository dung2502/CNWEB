<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
        $a = array ('a' => '1', 'b' => '2', 'c' => '3');
        foreach ($a as $value) {
            {
                echo $key,"=",$value,"<br>";
            }
        } 
?>
</body>
</html>