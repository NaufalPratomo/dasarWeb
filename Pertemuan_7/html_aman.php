<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

//Memeriksa apakah input adalah email yang valid
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //Lanjutkan dengan pengolahan email yang valid
        echo "input: " . $input . "<br>";
        echo "email: " . $email . "<br>";
    } else {
        //Tangani input yang tidak valid
        echo "Email tidak valid 🙏";
    }
}
?>