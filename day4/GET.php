<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1> $_GET trong PHP sẽ lấy giá post đi từ form cho method = "get"</h1>
<h1> Khi post data từ form có method="get" thì data sẽ xuất hiện trên URL</h1>
<?php

//hàm isset() check xem giá trị hoặc biến có tồn tại hay không?
if( isset($_GET) && isset($_GET["email"]) && isset($_GET["password"])){

    echo '<pre>';
    print_r($_GET);
    echo '/<pre>';
}
?>

<div class="container">
    <div class="row">
        <div class="col-ms-12">
            <form name="login" action="" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>