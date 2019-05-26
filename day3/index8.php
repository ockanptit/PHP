<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Các cách khai báo mảng chỉ số
        Chú ý: Key của mảng chỉ số bắt đầu từ số 0

    </pre>

    <?php
    //Cách 1: truyền value vào
    $arr1 = array(2,4,6,8,10,12);

    //Cách 2: truyền cả key và value vào
    $arr2 = array(0 => 2, 1 => 4, 2 => 6, 3 => 8, 4 => 10, 5 => 12);

    //Cách 3: Khai báo mảng trước
    //rồi mới gán giá trị  cho các phần tử
    $arr3 = array();
    $arr3[] = 2;
    $arr3[] = 4;
    $arr3[] = 6;
    $arr3[] = 8;
    $arr3[] = 10;
    $arr3[] = 12;

    //Cách 4: gần giống cách số 3 nhưng sẽ truyền kry vào
    $arr4 = array();
    $arr4[0] = 2;
    $arr4[1] = 4;
    $arr4[2] = 6;
    $arr4[3] = 8;
    $arr4[4] = 10;
    $arr4[5] = 12;

    echo '<pre>';
    print_r($arr1);
    echo '<pre>';

    echo '<pre>';
    print_r($arr2);
    echo '<pre>';

    echo '<pre>';
    print_r($arr3);
    echo '<pre>';

    echo '<pre>';
    print_r($arr4);
    echo '<pre>';
    ?>


</body>
</html>