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
        <form id="form-login" name="form-login" method="POST" action="/controller/controller_login.php" onsubmit="return notifikasi()">
            <h2>Login</h2>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password"><br><br>
            <button type="submit" id="btnlogin">login</button>
            <br><br>
            <a href="register.php">Belum Punya Akun ?</a><br>
        </form>
        <script src="../scripts/validationlogin.js"></script>
        <script src="../scripts/dom.js"></script>
    </div>
</div>
</body>
<?php
include('footer.html');
?>
