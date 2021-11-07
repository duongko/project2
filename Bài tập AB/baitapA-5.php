<?php
echo 'Số trong khoảng từ 1000 đến 2000 đồng thời chia hết cho 3,5,7 là: <br>';
//kiểm tra điều kiện lần lượt số chia hết cho 105
for ($i=1000; $i < 2000 ; $i++) { 
   if($i%(3*5*7) == 0){
       echo $i." ";
   }
}
?>