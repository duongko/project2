<?php
$str = '';
$str_search ='abc';
//nhận chuỗi nhập vào
if (isset($_POST['a'])) {
    $str = $_POST['a'];
}
?>
<!-- // Form nhập vào chuỗi-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập xâu: </td>
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
$result = substr_count($str,$str_search);    //tìm số lần xuất hiện xâu

echo $result;   //in ra kết quả

?>