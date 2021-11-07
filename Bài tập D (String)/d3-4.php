<?php
$str = '';
//nhận xâu
if (isset($_POST['a'])) {
    $str = $_POST['a'];
}
?>
<!-- // Form nhập -->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập họ và tên: </td>
            <td><input type="text" name="a" value="<?= $str ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$arrName = explode(" ",$str);   //tách họ và tên và lưu vào mảng
$ho = array_shift($arrName);     //tách ra phần tử đầu tiên của mảng
echo "Họ: ".$ho.'<br>';
$ten = array_pop($arrName);     //tách ra phần tử cuối cùng của mảng
echo "Tên: ".$ten.'<br>';
$tendem = implode(" ", $arrName);   //tách ra phần kết nối các phần tử còn lại
echo "Tên đệm: ".$tendem;

?>