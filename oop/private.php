<?php
 
// buat class komputer
class komputer {
   
   // property dengan hak akses protected
   private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
   
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
  
// buat class laptop
class laptop extends komputer{
  
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
  
// buat objek dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru = new laptop();
  
// jalankan method dari class komputer
echo $komputer_baru->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"
  
// jalankan method dari class laptop (error)
echo $laptop_baru->tampilkan_processor();
// Notice: Undefined property: laptop::$jenis_processor
?>