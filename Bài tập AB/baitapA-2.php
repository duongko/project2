<?php
//kiem tra so nguyen to
function check($n){
    if($n<2){ 
        return false;
    }
    for($i=2; $i<$n; $i++){
        if($n % $i ==0){
            return false;
        }
    }
    return true;
}
//In ra so nguyen to 
echo "20 số nguyên tố đầu tiên là: <br>";
$dem = 0;
$a = 2;
while ($dem < 20) { 
   if(check($a)){
       echo $a." ";
       $dem++;
   }
   $a++;
}
?>