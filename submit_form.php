<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['studentName'];
    $father = $_POST['fatherName'];
    $dob = $_POST['dob'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Data को text file में save करना
    $data = "Name: $name | Father: $father | DOB: $dob | Class: $class | Address: $address | Phone: $phone | Email: $email\n";
    file_put_contents(__DIR__."/admission_data.txt", $data, FILE_APPEND);

    echo "<h2>Admission form submitted successfully!</h2>";
}
?>