<?php
$str = '';

//nhận dãy số nhập vào
if (isset($_POST['a'])) {
    $str = $_POST['a'];
}
?>
<!-- // Form nhập vào dãy số-->
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
$kq = trim($str);   //hàm xóa đi khoảng trắng thừa
echo $kq;    
?>