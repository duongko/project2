<?php
$s1 = '';
$s2='';

//nhận xâu nhập vào
if (isset($_POST['a'])) {
    $s1 = $_POST['a'];
}
if (isset($_POST['b'])) {
    $s2 = $_POST['b'];
}
?>
<!-- // Form nhập -->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập xâu S1: </td>
            <td><input type="text" name="a" value="<?= $s1 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S2: </td>
            <td><input type="text" name="b" value="<?= $s2 ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$vitri = array();
$last=0;

while (($last = strpos($s2, $s1, $last))!== false) { //lấy vị trí đầu tiên xuất hiện xâu S1
    $vitri[] = $last;   //lưu vị trí chuỗi s1 vào mảng
    $last = $last + strlen($s1);    //tăng thêm độ dài xâu S1
}
$count = count($vitri);     //số lần xuất hiện S1 là số phần tử mảng vitri
//  in kết quả
echo "Chuỗi S1 xuất hiện ".$count." lần. Tại vị trí ";
foreach ($vitri as $value) {
    echo $value ." ";
}
?>