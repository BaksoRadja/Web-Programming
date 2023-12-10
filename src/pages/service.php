<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/src/styles/style.css">
    <title>Servive-in Aja!</title>
</head>
<?php
include('header.html');
?>
<div class="halaman-login">
    <div class="form-login">
        <form name="form-register" method="POST" action="/controller/controller_register.php">
            <h2>Antar Jemput Device</h2>
            <h5>isi data device yang ingin di service</h5>
            <div>
                <label for="nama_device">Nama Device : </label>
                <input type="text" name="nama_device" id="nama_device"><br>
            </div>
            <div>
                <label for="merk">Merk : </label>
                <input type="text" name="merk" id="merk"><br>
            </div>
            <div>
                <label for="serial_number">Serial Number : </label>
                <input type="text" name="serial_number" id="serial_number"><br>
            </div>
            <div>
                <label for="model">Model : </label>
                <input type="text" name="model" id="model"><br>
            </div>
            <div>
                <label for="brand">Brand : </label>
                <input type="text" name="brand" id="brand"><br><br>
            </div>
            <input type="submit" value="Submit" id="btnsubmit"><br><br>
        </form>
    </div>
</div>
</body>
<?php
include('footer.html');
?>