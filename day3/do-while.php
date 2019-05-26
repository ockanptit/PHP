<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Vòng lặp do while
        CÚ PHÁP:

        sự khởi đầu của vòng lpawj
        do{
            //Các câu lệnh thực thi của vòng lặp


            sự thay đổi của biến đếm sau mỗi lần chạy
        }
        while ( điều kiện chạy của vòng lặp)

    </pre>

    <?php
    echo "In các số từ 0 đến 19";
    $i = 0;
    do {
        echo "<br>" .$i;
        $i++;
    } while($i <= 19);

    echo "<br> In ra các số chẵn từ 0 đến 19";
    $i = 0;
    do {
        echo "<br>" .$i;
        $i +=2;
    }while( $i < 19);

    echo "<br> In ra các số chẵn từ 0 đến 19";
    $i = 0;
    do{
        if ( ($i %2) == 0){
            echo "<br>" .$i;
        }
        $i++;
    }while ($i < 19);
    ?>
</body>
</html>