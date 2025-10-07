<!DOCTYPE html>
<html>

<head>
    <title>Form input dengan Validasi</title>
    <script src="../Jobsheet 6_praktik_jquery/jquery-3.7.1.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form action="proses_validasi.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>

        <input type="submit" value="Kirim">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Jika validasi gagal, hentikan pengiriman form
                if (!valid) {
                    event.preventDefault();
                    // Menghentikan pengiriman form jika validasi gagal
                }
            });
        });
    </script>
</body>

</html>