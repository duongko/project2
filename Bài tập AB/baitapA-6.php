<?php
function check($n){
    $sum = 0;    // bien luu tru tong uoc
    // Kiem tra tung so tu 1 den n
    for ($i = 1; $i < $n; $i++){
        if ($n % $i == 0){
            $sum = $sum + $i;
        }
        if ($sum == $n) {
            return true;
          }
          if ($sum > $n) {
            return false;
          }
    }      
}
// In ra man hinh
echo "5 số hoàn hảo đầu tiên là: <br>";
$n = 2;
$dem = 0;
while ($dem<5) {
    if (check($n)) {
        echo $n." ";
        $dem++;
    }
    $n++;
}
?>