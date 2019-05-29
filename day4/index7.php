<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1> Gán giá trị mặc định cho tham số</h1>
    <pre>
        Nếu không truyền biến hoặc giá trị cho tham số của hàm
        thì sẽ bị lỗi
        Fatal error: Uncaught ArgumentCountError: Too few arguments to function tinhchuvihinhtron(),
        0 passed in C:\xampp\htdocs\PHP\day4\index7.php on line 26 and exactly 1 expected in
        C:\xampp\htdocs\PHP\day4\index7.php:20 Stack trace: #0 C:\xampp\htdocs\PHP\day4\index7.php(26): tinhchuvihinhtron()
        #1 {main} thrown in C:\xampp\htdocs\PHP\day4\index7.php on line 20


        Để tránh điều này nếu trong 1 số trường hợp người ta sẽ gán giá trị mặc định cho tham số
    </pre>

    <?php
    /*
     * Khai báo hàm với $r là tham số truyền vào
     */

    function tinhchuvihinhtron($r){
        $chuvi = 3.14*$r*2;

        return $chuvi;
    }
    //gọi hàm
    $ketqua = tinhchuvihinhtron();
    echo '<br> Chu vi hình tròn là: ' .$ketqua;
    ?>
</body>
</html>