<?php


for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        //Câu lệnh continue sẽ bỏ qua các câu lệnh bên dưới của vòng lặp
        //và chạy sang lần lặp tiếp theo

        continue;
    }
    echo '<br>' .$i; //Sẽ in ra $i từ 1->9 mà bỏ qua giá trị $i == 5
}