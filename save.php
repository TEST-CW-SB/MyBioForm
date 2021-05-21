<?php
session_start();

if (isset($_POST['name']) and isset($_POST['email'])and isset($_POST['subject'])and isset($_POST['des'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $des = $_POST['des'];
    $subject = $_POST['subject'];


    $myfile = fopen("Comments.txt", "a") or die("Unable to open or Create file!");
    $txt1 = "name: " . $name . "\n";
    fwrite($myfile, $txt1);

    $txt2 = "email: " . $email . "\n";
    fwrite($myfile, $txt2);

    $txt4 = "subject: " . $subject . "\n";
    fwrite($myfile, $txt4);

    $txt3 = "des: " . $des . "\n";
    fwrite($myfile, $txt3);

    $txt3 = "--------------------------------------". "\n";
    fwrite($myfile, $txt3);

    fclose($myfile);

    $_SESSION['msg_comment'] = 'دیدگاه با موفقیت ذخیره شد.';
    header('Location: Index.php');

}
