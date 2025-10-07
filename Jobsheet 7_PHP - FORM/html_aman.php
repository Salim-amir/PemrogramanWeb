<!DOCTYPE html>
<html>
<head>
    <title>Input Aman</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="post" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" name="input" id="input" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<p>Hasil input aman: $input</p>";
    }

    //memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email yang valid: $email";
    } else {
        echo "Email tidak valid.";
    }
    ?>
</body>
</html>
