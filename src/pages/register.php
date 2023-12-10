<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Service-in Aja!</title>
</head>
<?php
include('header.html');
?>
<body>

<div class="halaman-login">
    <div class="form-login">
        <form name="form-register" method="POST" action="/controller/controller_register.php">
            <h2>Register</h2>
            <div>
                <label for="firstname">First Name : </label>
                <input type="text" name="firstname" id="firstname"><br>
            </div>
            <div>
                <label for="lastname">Last Name : </label>
                <input type="text" name="lastname" id="lastname"><br>
            </div>
            <div>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"><br>
            </div>
            <div>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username"><br>
            </div>
            <div>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password"><br>
            </div>
            <div>
                <label for="confirmpass">Confirm Password : </label>
                <input type="password" name="confirmpass" id="confirmpass"><br><br>
            </div>
            <input type="submit" value="Register" id="btnregister"><br><br>
            <a href="login.php">Sudah Punya Akun ?</a><br>
        </form>
        <!--            <script src="../scripts/validationregister.js"></script>-->
        <!--            <script src="../scripts/dom.js"></script>-->
    </div>
</div>
</body>
<?php
include('footer.html');
?>
