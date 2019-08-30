<?php
function tambah_string (&$str) {
$str = $str . ", Jakarta";
return $str;
}
//
$str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";

// Program menampilkan defined-function yang didukung oleh PHP.
function luas_lingkaran ($jari) {
return 3.14 * $jari * $jari;
}
$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";

// Program memeriksa suatu fungsi tersedia di PHP atau tidak.
if (function_exists('exif_read_data')) {
echo "Fungsi exif_read_data() ada di PHP.<br />\n";
} else {
echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
}
?>