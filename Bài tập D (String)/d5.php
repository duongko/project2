<?php
$str = '';
//nhận xâu nhập vào
if (isset($_POST['a'])) {
    $str = $_POST['a'];
}
?>
<!-- // Form nhập vào xâu-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập xâu gồm các ký tự 0 và 1: </td>
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
$result = strtr($str, "0", "x");    //thay thế các ký tự "0" bằng "x"
$result = strtr($result, "1", "0");     //thay thế các ký tự "1" bằng "0"
$result = strtr($result, "x", "1");     //thay thế các ký tự "x" bằng "1"

echo 'Xâu đã biến đổi 0->1, 1->0 là: <h3> '.$result.'</h3>';   //in ra kết quả

?>