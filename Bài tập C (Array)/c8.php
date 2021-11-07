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

for ($i=0; $i < $count ; $i++) { 
    if ($arr[$i]==0) {
      unset($arr[$i]);  
    }
}

//In kết quả
echo 'Dãy số sau khi xóa đi các số bằng 0 là: ';
//Vòng lặp for chạy giá trị key trong mảng
foreach ($arr as $value) {
    echo $value . ' ';
}
?>