<?php 


 class produk{
		public $toko,$merk,$harga;

		function __construct ($toko="toko", $merk="toko", $harga=0){
			$this->toko=$toko;
			$this->merk=$merk;
			$this->harga=$harga;
		}
		
 

function hallo(){
	return "$this->toko, $this->merk, $this->harga";

}


 }
$produk1 = new produk("bogor","samsung",1000);
$produk2 = new produk("bandung","oppo",2000);

echo "produk1: ".$produk1->hallo();
echo "<br>";
echo "produk2: ".$produk2->hallo();
 ?>