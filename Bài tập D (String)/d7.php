<?php
$str = '';
//nhận xâu nhập vào
if (isset($_POST['a'])) {
    $str = $_POST['a'];
}
?>
<!-- // Form nhập xâu-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập xâu : </td>
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

    $number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);  //mảng chứa các chữ số
    $result = str_replace($number, '$', $str);   //đổi các phần tử trong mảng $number thành '$'
    echo 'Kết quả: ' . $result;   //in ra kết quả



?>