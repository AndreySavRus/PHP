<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
    $str = "Hello";
    echo "Var= $str";
    $list = ["age"=> 49, "City"=> "Spb", "Hobby"=>"programming"];
foreach ($list as $i => $item) {
    echo  "<br>Ключ: $i Значение - ".$item;
    };
function info($param)
{
    echo "<br>$param";
}
info("d");
info("dfgd");
info(8989);
?>
</body>
</html>


