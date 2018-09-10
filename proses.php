<?php 
//Tuliskan kode anda di bawah ini
	function rekursif($i, $angka){
		global $i;
		rekursif2($i, $angka);
		echo "<br>";
		if(--$angka > $i){
			rekursif($angka);
		}
	}
	function rekursif2($j, $angka){
		global $i;
		if ($j > $i - $angka) {
			echo "*";
			rekursif2($j - 1, $angka);
		}
	}
	$angka=$_POST['angka'];
	echo "Angka: $angka<br>";
	$i=0;
	rekursif($angka);

	for ($i=1; $i <= $angka; $i++) { 
		if ($i % 2 == 0) {
			$genap[]=$i;
		} else{
			$ganjil[]=$i;
		}
	}
	foreach ($genap as $bil_genap) {
		echo $bil_genap.",";
	}
	foreach ($ganjil as $bil_ganjil) {
		echo $bil_genap.",";
	}
?>
