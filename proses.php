<?php 
//Tuliskan kode anda di bawah ini
	function rekursif($angka){
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
	$masuk=$_POST['masuk'];
	echo "Angka: $masuk<br>";
	$i=0;
	rekursif($angka);

	for ($i=1; $i <= $masuk; $i++) { 
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
		echo $bil_ganjil.",";
	}
?>
