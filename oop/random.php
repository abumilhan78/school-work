<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   public $pemilik="Andi";
  
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
  
echo $laptop_baru->hidupkan_laptop(); // "Hidupkan Laptop Andi";
  
//ubah isi property $pemilik pada objek $laptop_baru
$laptop_baru->pemilik="Arie";
  
echo $laptop_baru->hidupkan_laptop(); // "Hidupkan Laptop Arie";
 
// buat objek baru dari class laptop dan panggil hidupkan_laptop()
$laptop_lama = new laptop();
echo $laptop_lama->hidupkan_laptop();
?>