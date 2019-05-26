<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Truy cập các phần tử của mảng thông qua key
    </pre>

    <?php
    $arr1 = array(2,4,6,8,10,12);
    echo "<br" .$arr1[2];
    echo "<br" .$arr1[3];
    echo '<pre>';
    print_r($arr1);
    echo '</pre>';

    $arr1[1] = 100;
    $arr1[3] = 200;

    echo '<pre>';
    print_r($arr1);
    echo '</pre>';
    ?>

</body>
</html>