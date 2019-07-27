<?php 
	function cetak_gambar($param1){
		if ($param1 % 2 ==0) {
			echo "Nilai parameter harus Bilangan Ganjil !";
		}else{
			for ($z=0; $z < $param1; $z++) { 
			for ($i=0; $i < $param1; $i++) {  
				
					if ($i==0 || $i==$param1-1 || $z == ceil($param1/2)-1) {
						print "&nbsp;* &nbsp;";
					}else{
						print " = &nbsp;";
					}
				}
				print"<br>";
			}			
		}
	}
	cetak_gambar(5);
?>