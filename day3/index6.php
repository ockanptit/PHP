<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Sự khác biệt giữa while và do while:
        - Vòng lặp while chỉ chạy khi điều kiện == true
        - Vòng lặp do while sẽ chạy lần đầu tiên ngay cả khi điều kiện == false
        từ lần chạy thứ 2 trở đi do while chỉ chạy khi đk == true
    </pre>

    <?php
    $i = 20;
    while ($i <10){
        echo "<br>" .$i;
        $i++;
    }

    $i = 20;
    do{
        echo "<br> vẫn chạy vòng 1 - i= $i";
        $i++;
    } while ($i < 10);
    ?>
</body>
</html>