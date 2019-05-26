<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Vòng lặp trong PHP
        Vòng lặp thực hiện chu trình theo 1 số lần nhất định
        Ví dụ: Vòng lặp các thứ trong tuần
        Chạy từ CN đến T7 sau đó lại lặp lại
        Vòng lặp for:
        1 - Điểm bắt đầu của vòng lặp
        2 - điều kiện chạy của vòng lặp
        3 - sự thay đổi của biến điếm sau mỗi lần cahyj của vòng lặp

        CÚ PHÁP LỆNH FOR:
        for (1;2;3){
            //code thự thi của vòng lặp for;
        }
    </pre>
    <?php
    echo "In ra các số từ 0 đến 20";
    for ($i = 0 ;$i <= 20; $i++ ){
        echo "<br>" .$i;
    }

    echo "<br> In ra các số chẵn từ 0 đến 20";
    for ($i = 0; $i <= 20; $i += 2){
        echo "<br>" .$i;
    }
    echo"<br>";
    echo"<br>";
    echo "In ra các số chẵn từ 0 đến 20";
    for ($i = 0 ;$i <= 20; $i++ ){
        if (($i % 2) == 0){
            echo "<br>" .$i;
        }
    }
    ?>
</body>
</html>