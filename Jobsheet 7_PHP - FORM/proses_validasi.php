<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $errors = array();

    // Validasi Nama
    if(empty($nama)){
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if(empty($email)){
        $errors[] = "Email harus diisi.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Format email tidak valid.";
    }

    //Jika ada kesalahan validasi
if(!empty($errors)){
    foreach($errors as $error){
        echo "Server error: " . $error . "<br>";
    }
} else {
    $to = $email;
    $subject = "Pendaftaran Berhasil";
    $message = "Halo $nama,\n\nTerima kasih telah mendaftar!";
    $headers = "From: no-reply@example.com";

    if(mail($to, $subject, $message, $headers)){
        echo "Data berhasil dikirim : Nama = $nama, Email = $email";
    } else {
        echo "Terjadi kesalahan saat mengirim email.";
    }
}
}