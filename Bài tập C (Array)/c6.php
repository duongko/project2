<?php
$dayso = 0;
//nhận dãy số nhập vào
if (isset($_POST['n'])) {
    $dayso = $_POST['n'];
}
// 
?>
<!-- // Form nhập vào dãy số-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập dãy số tự nhiên:</td>
            <td><input type="text" name="n" value="<?= $dayso ?>" /></td>
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
$num = array();
//nếu có số 1 thì thêm vào mảng
if(in_array("1", $arr)){
    $num[]=1;
}
//tìm các số >1
for ($i = 0; $i < $count; $i++) {

    for ($j = 0; $j < $count; $j++) {
      
        if ($arr[$j] >1 && $arr[$i]>0 && $arr[$i]!=$arr[$j] && $arr[$i]%$arr[$j]==0) {
            $num[] = $arr[$j];
        }
        
    }
}
//loại bỏ các số trùng nhau
$kq = array_unique($num);

//In kết quả
echo 'Các số trong dãy thỏa mãn là ước thực sự của 1 số hạng trong dãy số là: ';
//Vòng lặp for chạy giá trị key trong mảng
foreach ($kq as $value) {
    echo $value . ' ';
}
?>