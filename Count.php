<?php  
$nama = $_POST['Nama'];
$nilai = explode(",",$_POST['Nilai']);
$Limit = count($nilai);
$Total_Nilai = 0;

for ($i = 0; $i < $Limit; $i++) {
  $Total_Nilai = $Total_Nilai + $nilai[$i];
}

$Total_Nilai = $Total_Nilai/$Limit;
echo "Halo $Total_Nilai";

?>
 