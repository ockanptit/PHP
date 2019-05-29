<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1> Phạm vi của biến</h1>
    <pre>
        - Biến cục bộ: Chỉ có ảnh hưởng và chỉ sử dụng được trong 1 không gian nhất định
        - Biến toàn cục: Có ảnh hưởng và có thể sử dụng ở mọi nơi
        - Nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì php sẽ lấy giá trị của biến
        toàn cục
        ***
        Tham số khi khai báo hàm là biến cục bộ và chỉ có tác dụng trong hàm
        Ví dụ như là biến $r là biến cục bộ

    </pre>
<?php

    //Biến toàn cục
    $r = 100;


    /*
    * Khai báo hàm với $r là tham số truyền vào
    */

    function tinhchuvihinhtron($r = 10){

        //chu vi là biến cục bộ
        $chuvi = 3.14*$r*2;

        return $chuvi;
    }
    //gọi hàm
    //Biến $ketqua bên ngoài hàm là biến toàn cục
    $ketqua = tinhchuvihinhtron(15);
    echo '<br> Chu vi hình tròn là: ' .$ketqua;
    echo '<br> Test thử biến $r : ' .$r;
    ?>
</body>
</html>