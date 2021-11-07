<?php
$dayso = 0;
$c=0;
//nhận dãy số nhập vào
if (isset($_POST['n'])) {
    $dayso = $_POST['n'];
}
if (isset($_POST['c'])) {
    $c = $_POST['c'];
}

?>
<!-- // Form nhập vào dãy số-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập dãy số tự nhiên:</td>
            <td><input type="text" name="n" value="<?= $dayso ?>" /></td>
        </tr>
        <tr>
            <td>Nhập số c</td>
            <td><input type="text" name="c" value="<?= $c?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>
<?php
//tách giá trị sau dấu ',' và thêm vào mảng
$arr = explode(",", $dayso);
//đếm số lượng phần thử của mảng
$count = count($arr);
$count1=0;
$count2=0;
$count3=0;
for ($i=0; $i < $count ; $i++) { 
    if ($arr[$i]==$c) {
      $count1+=1; 
    }
    if ($arr[$i]>$c) {
        $count2+=1; 
      }
      if ($arr[$i]<$c) {
        $count3+=1; 
      }
}
if($count<2){
    echo "Vui lòng nhập vào dãy số";
}else{
//In kết quả
echo 'Số các số trong dãy có giá trị bằng '.$c.' là: '.$count1;
echo '<br> Số các số trong dãy có giá trị lớn hơn '.$c.' là: '.$count2;
echo '<br> Số các số trong dãy có giá trị nhỏ hơn '.$c.' là: '.$count3;
}
?>