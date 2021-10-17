<body align="center">
    <?php

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hobby = $_POST['hobby'];
    $desc = $_POST['desc'];


    if ($nama) {
        echo "<h1>Form input berhasil diterima</h1>" ;
        echo "Nama saya adalah {$nama} <br>" ;
    }

    if ($email) {
        echo "Email saya yaitu {$email} <br>" ;
    }

    if ($phone) {
        echo "No hp saya adalah {$phone} <br>" ;
    }

    if ($hobby) {
        echo "Hobby saya yaitu {$hobby} <br>" ;
    }

    if ($desc) {
        echo "Deskripsi diri saya adalah {$desc} <br>" ;
        echo "<hr>" ;
    }

?>
</body>
