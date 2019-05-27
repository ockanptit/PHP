<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng đa chiều là mảng lồng mảng
        Tức là mỗi phần tử của mảng sẽ là 1 mảng con
    </pre>

    <?php
    $cities = array();
    $cities['hn'] = array(
        'name' => 'Hà Nội',
        'district' => array(
            'tx' => array(
                'name' => 'Thanh Xuân',
                'unit' => array('Phường 1','Phường 2','Phường 3'),
            ),

            'hbt' => array(
                'name' => 'Hai Bà Trưng',
                'unit' => array('Phường 1','Phường 2','Phường 3'),
            ),

            'hd' => array(
                'name' => 'Hà Đông',
                'unit' => array('Phường 1','Phường 2','Phường 3'),
            )
        )
    );
    $cities['hcm'] = array(
        'name' => 'Hồ Chí Minh',
        'district' => array(
            'tb' => array(
                'name' => 'Tân Bình',
                'unit' => array('Phường 1','Phường 2','Phường 3'),
            ),

            'bt' => array(
                'name' => 'Bình Thạnh',
                'unit' => array('Phường 1','Phường 2','Phường 3'),
            ),

            'tt' => array(
                'name' => 'Thủ Thiêm',
                'unit' => array('Phường 1','Phường 2','Phường 3'),
            )
        )
    );

    foreach ($cities as $key_city => $city){
        echo "<ul>";
        echo $city['name'];

        foreach ($city['district'] as $key_district => $district){
            echo "<li>";
            echo $district['name'];

            foreach ($district['unit'] as $key_unit => $unit){
                echo "<p style='padding: 20px 30px'>";
                echo "<br>" .$unit;
                echo "</p>";
            }
            echo '</li>';

        }
        echo '</ul>';
    }
    ?>
</body>
</html>