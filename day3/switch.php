<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Cú pháp lệnh switch case
        n là giá trị của biến hoặc là biến
        switch(n) {
            case label 1:
                //code chạy khi mà n == label 1;
                break;
            case label 2:
                //code chạy khi mà n == label 2;
                break;
            ...
            default:
                //code chạy khi mà n khác tất cả các label trên ;
        }
    </pre>

    <?php
    $d = date('D');
    echo "<br> Thứ hiện tại là: " .$d;
    switch ($d) {
        case "Sun":
            echo "<br> Hôm nay là chủ nhật";
            break;
        case "Mon":
            echo "<br> Hôm nay là thứ 2";
            break;
        case "Tue":
            echo "<br> Hôm nay là thứ 3";
            break;
        case "Wed":
            echo "<br> Hôm nay là thứ 4";
            break;
        case "Thu":
            echo "<br> Hôm nay là thứ 5";
            break;
        case "Fri":
            echo "<br> Hôm nay là thứ 6";
            break;
        case "Sat":
            echo "<br> Hôm nay là thứ 7";
            break;
        default:
            echo "Không xác định được ngày nào trong tuần ";
    }
    ?>
</body>
</html>