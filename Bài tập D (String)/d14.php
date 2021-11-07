<?php
$n=0;
$s1='111000';
//nhận dãy số nhập vào
if (isset($_POST['n'])) { $n = $_POST['n'];}

?>
<!-- // Form nhập vào n-->
<form action="#" method="post">
    <table>
        <h4>S1= “1111100000”, Sk thu được từ Sk-1 bằng cách thay đổi cho lần lượt các vị trí  1-2;  2-3;  3-4; 4-5; 5-6;  6-7; 7-8;  8-9; 9-10.
        <br> Cho trước số tự nhiên N, Hãy in ra xâu Sn.
        </h4>
    <tr>
            <td>Nhập giá trị n: </td>
            <td><input type="text" name="n" value="<?= $n ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php

$a=0;
$b=0;
$s1= '1111100000';
$arr=str_split($s1);
$count = count($arr);

if(filter_var($n, FILTER_VALIDATE_INT)){
if ($n>0) {
    for ($i=0; $i < $n-1; $i++) { 
        for ($j=0; $j < $count-1; $j++) { 
          
      $a=$arr[$j];
      $b=$arr[$j+1];
      $arr[$j]=$b;
      $arr[$j+1]=$a;
    
    }
    }

    echo "Xâu S$n thu được là: ";
    foreach ($arr as $value) {
        echo $value . '';
    }
}else{
    echo 'Giá trị của n phải lớn hơn 0';
}
}else{
    echo "Hãy nhập giá trị của n!";
}

?>