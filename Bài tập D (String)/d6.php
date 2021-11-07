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
            <td>Nhập xâu S: </td>
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
$result = strrev($str);   //đảo ngược chuỗi

echo 'Xâu S1 đảo ngược của xâu S là: '.$result;   //in ra kết quả

?>