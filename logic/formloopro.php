<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        foreach ($nama as $data => $val) {
            echo "Nama Anda : " . $nama[$data] . "- Kelas  : ". $kelas[$data] . "<hr>";
        }
    }

?>