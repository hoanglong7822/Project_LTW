<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>May | Admin | Đăng nhập</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/d59edfb421.js" crossorigin="anonymous"></script>

    </head>
    <h2>Đăng nhập Admin</h2>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
        <form action="ktradangnhap.php" method="post">
                <h1>Đăng nhập</h1>
                <span>Hãy điền tài khoản của bạn</span>
                <input type="email" name="txttendangnhap" placeholder="Email" />
                <input type="password" name="txtpassword" placeholder="Password" />
                <a href="#">Quên mật khẩu?</a>
                <input type="submit" value="Đăng nhập">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>May</h1>
                    <p>Chào mừng bạn đến với trang quản trị</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>