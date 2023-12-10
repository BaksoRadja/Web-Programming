<?php
include_once("../models/Users.php");

echo "Hello its me Controller-chan";
echo $_SERVER["DOCUMENT_ROOT"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new Customer($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password'], '', $_POST['email']);
    echo "<pre>";
    echo "<br> DATA TERSIMPAN DI DATABASE";
    var_dump($user);
    echo "</pre>";
    $user->simpancust();
}
?>