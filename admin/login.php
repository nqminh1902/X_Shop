<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log_in</title>
    <link href="img/tải xuống.png" rel="icon">
    <link href="img/tải xuống.png" rel="apple-touch-icon">
</head>
<style>
body {
    background: #1690A7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 110vh;
}

* {
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 600px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 8px auto;
    border-radius: 5px;
}

label {
    color: #888;
    font-size: 18px;
    padding: 10px;
}

button {
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

button:hover {
    opacity: .7;
}

.error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
}

.error {
    background: #F2DEDE;
    COLOR: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
}
</style>

<body>

    <form action="login.php" method="post">
        <h2>Đăng nhập</h2>

        <label> User Name</label>
        <input type="text" name="username" placehoder="Use Name">


        <label> Password</label>
        <input type="password" name="password" placehoder="password">
        <button type="submit" name="btn_submit">Log-in</button>
        <?php
        //Gọi file connection.php ở bài trước
        include_once("config/config.php");
        // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
        if (isset($_POST["btn_submit"])) {
            // lấy thông tin người dùng
            $username = $_POST["username"];
            $password = $_POST["password"];
            //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
            //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);
            if ($username == "" || $password == "") {
                echo " username hoặc password bạn không được để trống!";
            } else {
                $sql = "select * from user where username = '$username' and password = '$password' ";
                $query = mysqli_query($links, $sql);
                $num_rows = mysqli_num_rows($query);
                if ($num_rows == 0) {
                    echo "username hoặc password không đúng !";
                } else {
                    //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                    $_SESSION['username'] = $username;
                    // Thực thi hành động sau khi lưu thông tin vào session
                    // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                    header('Location: index.php');
                }
            }
        }
        ?>

    </form>

</body>

</html>