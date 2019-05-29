<?php
$arr1 = array(1,8,20,100,92,5,20);

//  Sắp sếp các phần tử theo thứ tự giảm dần
//sử dụng hàm rsort


echo '<pre>';
print_r($arr1);
echo '/<pre>';
//Trước khi sử dụng hàm sort

rsort($arr1);

echo '<pre>';
print_r($arr1);
echo '/<pre>';
