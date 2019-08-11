<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO buku_tamu(nama,email,pesan) VALUES('$nama','$email','$pesan')");

        // Show message when user added
        echo "<script language='javascript'>alert('Pesan berhasil terkirim');document.location='guest_book.php';
		</script>";
    }
    ?>