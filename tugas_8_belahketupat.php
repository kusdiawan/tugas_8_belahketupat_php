<?php 
function belah_ketupat(){
	for( $a=5; $a>0; $a--){
		for($i=1; $i<=$a; $i++){
			echo "__";
		}for($a1=6; $a1>$a; $a1--){
			echo"**";
		}for($a2=5; $a2>$a; $a2--){
			echo"**";
		}echo"<br>";
	}for($b=0; $b<=5; $b++){
		for($j=1; $j<=$b; $j++){
			echo"__";
		}for($b1=6; $b1>$b; $b1--){
			echo"**";
		}for($b2=5; $b2>$b; $b2--){
			echo"**";
		}echo"<br>";
	}
}

echo "<table>";
echo "<tr>";
for ($i=0; $i<=8; $i++){
echo "<td>"; 
echo belah_ketupat(); 
echo "</td>";
}
echo "</tr>";
echo "<tr>";
for ($i=0; $i<=8; $i++){
echo "<td>"; 
echo belah_ketupat(); 
echo "</td>";
}
echo "</tr>";
echo "</table>";
?> 
