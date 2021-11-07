<?php 
//Kiem tra hop so
function kiem_tra_hop_so($n){
    if($n<2){
        return FALSE;
    }
    for ($i=2; $i < $n; $i++) { 
        if ($n % $i != 0) {
            return FALSE;
        }
    }
    return TRUE;
}
//In ra cac hop so <100
echo "CÁC HỢP SỐ NHỎ HƠN 100 LÀ: <br>"; 
for ($a=0; $a < 100; $a++) { 
    if (kiem_tra_hop_so($a)) {
       echo $a." ";
    }
}

?>
