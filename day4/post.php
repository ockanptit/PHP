<?php

//hàm isset() check xem giá trị hoặc biến có tồn tại hay không?
if( isset($_POST) && isset($_POST["email"]) && isset($_POST["password"])){

    echo '<pre>';
    print_r($_POST);
    echo '/<pre>';
}
?>