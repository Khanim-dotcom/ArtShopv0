<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('public/admin/css/loginCss.css') ?>">
</head>
<body>

    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Logo</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros dapibus, ultricies tellus vitae, consectetur tortor. Etiam rutrum placerat
                    </p>
                    <a class="btn" href="">Read More</a>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="admin_login_loginAct">
                        <p>
                            <input type="text" placeholder="Username" required>
                        </p>
                        <p>
                            <input type="password" placeholder="Password" required>
                        </p>
                        <p>
                            <input class="btn" type="submit" value="Sing In" />
                        </p>
                        <p>
                            <a href="">Forget password?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </div>




</body>
</html>