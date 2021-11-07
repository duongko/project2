<?php
function check($n){
    if ($n<2) {
        return false;
    }
    for ($i=2; $i < $n ; $i++) { 
        if($n % $i==0){
            return false;
        }
    }
    return true;
}
echo "Các số nguyên tố từ 1000 đến 2000 là: <br>";
function show_check($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check($i))
            echo $i.' ';
    }
}
show_check(1000, 2000);
?>