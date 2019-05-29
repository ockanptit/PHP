<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1> Truyền tham chiếu và truyền tham trị cho function</h1>
    <pre>
        - Truyền tham trị: Là chỉ truyền giá trị
        - Truyền tham chiếu : Đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ khi 1 biến thay đổi thì
        biến kia cũng bị thay đổi theo
    </pre>

    <?php
        //Truyền tham trị
        $a = 5;
        function truyenthamtri($b){
            $b = $b * 2;
        }
        truyenthamtri($a);
        echo '<br> Tham trị thì $a : ' .$a;


        //Truyền tham chiếu

        $c = 10;
        function truyenthamchieu(&$d){
            $d = $d * 2;
        }
        truyenthamchieu($c);
        echo '<br> Tham chiếu thì $c : ' .$c;
        /*
        * Hiểu đơn giản là $c và $d cùng tham chiếu đến 1 ô nhớ
         * khi mà biến $d bị thay dổi thì $c cũng sẽ bị thay dổi theo
         * và ngược lại
        */
    ?>


</body>
</html>