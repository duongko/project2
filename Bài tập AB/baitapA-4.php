<?php
echo "Số < 100 chia hết cho 3 và 7 là: <br>";
//kiểm tra điều kiện chia hết cho 21
for ($i=0; $i < 100; $i++) { 
    if($i%(3*7)==0){
        echo $i." ";
    }
}
?>