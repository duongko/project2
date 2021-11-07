<?php
//Khai bao bien dem
$count0 = 0; //bien dem chia het 
$count1 = 0;  //bien dem  du 1
$count2 = 0;    //bien dem du 2
$count3 = 0;    //bien dem du 3

//Kiem tra dieu kien so du
for ($i = 0; $i <= 100; $i++) {
    $a = $i % 5;
    if ($a == 0) {
        $count0 += 1;  
    } elseif ($a == 1) {
        $count1 += 1;
    } elseif ($a == 2) {
        $count2 += 1;
    } elseif ($a = 3 && $a < 4) {
        $count3 += 1;
    }
}
//In ra ket qua
echo "Số các số tự nhiên <=100 chia hết cho 5 là: " . $count0 . "<br>";
echo "Số các số tự nhiên <=100 chia cho 5 dư 1 là: " . $count1 . "<br>";
echo "Số các số tự nhiên <=100 chia cho 5 dư 2 là: " . $count2 . "<br>";
echo "Số các số tự nhiên <=100 chia cho 5 dư 3 là: " . $count3 . "<br>";
?>