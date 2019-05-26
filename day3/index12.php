<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
    Mảng kết hợp là mảng có ít nhất 1 key là chuỗi

    </pre>

    <?php
    //Cách 1:
    $cities = array(
        'hn' => 'Hà Nội',
        'dn' => 'Đà nẵng',
        'hcm' => 'Hồ Chí Minh',
        'ct' => 'Cần thơ',
        'hp' => 'Hải phòng',
        );

    echo '<pre>';
    print_r($cities);
    echo '</pre>';

    //Cách 2:
    $cities = array();
    $cities['hn'] = "Hà nội";
    $cities['dn'] = "Đà nẵng";
    $cities['hcm'] = "Hồ chí minh";
    $cities['ct'] = "Cần thơ";
    $cities['hp'] = "Hải phòng";

   echo '<pre>';
    print_r($cities);
    echo '</pre>';

    //Truy cập vào các phần tử cảu mảng qua key
    echo'<br> $cities["hn"] : ' .$cities['hn'];
    echo'<br> $cities["dn"] : ' .$cities['dn'];
    foreach ($cities as $key_city => $city){
        echo "<br> key: " .$key_city;
        echo "<br> value: " .$city;
    }
    ?>
</body>
</html>