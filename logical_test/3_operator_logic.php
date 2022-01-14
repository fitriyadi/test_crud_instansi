<?php
function test($nilai,$pembagi){
	$nilaiawal=$nilai;
	$hasil=0;
	while ($nilai>0) {
		$nilai-=$pembagi;
		$hasil+=1;
	}

	return $nilaiawal." : ".$pembagi."=".$hasil;
}

echo test(7,3);
echo "<br>";
echo test(8,4);


?>