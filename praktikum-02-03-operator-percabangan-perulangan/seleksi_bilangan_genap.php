<?php
$data = array();
for($i=1; $i<=100; $i++)

{
    $angka_acak = rand(1,1000);
    array_push($data,$angka_acak);
}
foreach($data as $nilai)
{
    $hasil_bagi = $nilai % 2;
    if ($hasil_bagi == 0)
    {
        echo $nilai. "<br>";
    }
}
?>