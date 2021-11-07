<?php
//giả sử dãy số có 6 chữ số
// khai báo các giá trị trong dãy
$n1=0;
$n2=0;
$n3=0;
$n4=0;
$n5=0;
$n6=0;
//khai báo vị trí cần tráo đổi
$a = 0;
$b = 0;
// //nhận giá trị nhập vào
if (isset($_POST['a'])) {
    $a = $_POST['a'];
}
if (isset($_POST['b'])) {
    $b = $_POST['b'];
}
if (isset ( $_POST ['n1'] )) { $n1 = $_POST ['n1'];}
if (isset ( $_POST ['n2'] )) {$n2 = $_POST ['n2'];}
if (isset ( $_POST ['n3'] )) { $n3 = $_POST ['n3'];}
if (isset ( $_POST ['n4'] )) { $n4 = $_POST ['n4'];}
if (isset ( $_POST ['n5'] )) {$n5 = $_POST ['n5'];}
if (isset ( $_POST ['n6'] )) {$n5 = $_POST ['n6'];}
?>

<!-- Form nhập vào số nguyên  -->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập dãy số: </td>
            <td><input type="text" name="n1" value="<?= $n1 ?>" /></td>
            <td><input type="text" name="n2" value="<?= $n2 ?>" /></td>
            <td><input type="text" name="n3" value="<?= $n3 ?>" /></td>
            <td><input type="text" name="n4" value="<?= $n4 ?>" /></td>
            <td><input type="text" name="n5" value="<?= $n5 ?>" /></td>
            <td><input type="text" name="n6" value="<?= $n6 ?>" /></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Nhập vị trí cần tráo đổi: </td>
            <td><input type="text" name="a" value="<?= $a ?>" /></td>
            <td><input type="text" name="b" value="<?= $b ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$arr_number = array($n1, $n2, $n3, $n4, $n5, $n6);
// kiểm tra key nhập vào có tồn tại trong mảng không
if (array_key_exists($a, $arr_number) && array_key_exists($b, $arr_number)) {
    //Kiểm tra điều kiện nhập vào phải là 1 số
    if (filter_var($a, FILTER_VALIDATE_INT) && filter_var($b, FILTER_VALIDATE_INT)) {
        $d = $arr_number[$a - 1];
        $arr_number[$a - 1] = $arr_number[$b - 1];
        $arr_number[$b - 1] = $d;

        // in kết quả ra màn hình bằng vòng lặp
        echo ("Kết quả dãy số đã tráo đổi vị trí $a và $b là:  ");
        foreach ($arr_number as $value) {
            echo $value . ' ';
        }
    } else {
        echo ("Giá trị input không hợp lệ!");
    }
} else {
    echo "Vị trí nhập vào không tồn tại";
}


?>