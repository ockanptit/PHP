<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
        Xử lý thời gian trong PHP
        cú pháp hàm date(format,time)
        date(fomat): lấy ra thời gian hiện tại
        thời gian thì có thể đọc được
        định dạng format:
        - d: Đại diện cho ngày 1-31
        - D: Mon-Sun ngày ở dạng text
        - m: tháng 1-12
        - M: Tháng dạng text (Jan-Sep)
        - Y: năm
        - h: giờ 1-12
        - H: giờ 0-23
        - s: giây
        - i: phút
    </pre>
    <?php
        echo "<br> date('d/m/Y')" .date("d/m/Y");
        echo "<br> date('D/m/Y')" .date("D/m/Y");
        echo "<br> date('D/M/Y')" .date("D/M/Y");
        echo "<br> date('D/M/Y h:i:s')" .date("D/M/Y h:i:s");
        echo "<br> date('D/M/Y H:i:s')" .date("D/M/Y H:i:s");
        ?>


</body>
</html>