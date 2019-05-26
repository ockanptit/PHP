<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        - Các kiểu dữ liệu như dạng số, chuỗi, float, boolen,.. thì chỉ chứa
        giá trị đơn như: 3, "abc", true, false, null,...
        - Nếu muốn chứa nhiều giá trị thì sẽ phải sử dụng kiểu dữ liệu mảng
        - Mảng có 3 loại chính:
            1 - Mảng chỉ số ( index) có key là số
            2 - Mảng kết hợp ( mảng có key là chuỗi)
            3 - Mảng đa chiều ( mảng lồng mảng)

        - Tìm hiểu về mảng chỉ số
        - Cấu trúc của mảng gồm 2 thành phần đc phân cách bởi dấu phẩy ,
        $tên_mảng = [key,value]
            - key: hiểu đơn gian là số thứ tự
            - value: Gía trị
    </pre>

    <?php
    $arr1 = array(2,4,6,8,10,12);

    echo '<pre>';
    print_r($arr1);
    echo '<pre>';
    ?>
</body>
</html>