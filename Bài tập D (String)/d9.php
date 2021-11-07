<?php
$str = '';
$a=0;
$b=0;
//nhận dãy số nhập vào
if (isset($_POST['n'])) {
    $str = $_POST['n'];
}
if (isset($_POST['a'])) {
    $a = $_POST['a'];
}
if (isset($_POST['b'])) {
    $b = $_POST['b'];
}
?>
<!-- // Form nhập vào dãy số-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập xâu : </td>
            <td><input type="text" name="n" value="<?= $str ?>" /></td>
        </tr>
        <tr>
            <td>Nhập vị trí cần tráo đổi : </td>
            <td><input type="text" name="a" value="<?= $a ?>" /></td>
            <td><input type="text" name="b" value="<?= $b ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$array_str=str_split($str);     //tách phần tử xâu cho vào mảng
$d=0;

// kiểm tra key nhập vào có tồn tại trong mảng không
if (array_key_exists($a, $array_str) && array_key_exists($b, $array_str)) {
    //Kiểm tra điều kiện nhập vào phải là 1 số
    if (filter_var($a, FILTER_VALIDATE_INT) && filter_var($b, FILTER_VALIDATE_INT)) {
        $d = $array_str[$a - 1];
        $array_str[$a - 1] = $array_str[$b - 1];
        $array_str[$b - 1] = $d;

        // in kết quả ra màn hình bằng vòng lặp
        echo ("Kết quả chuỗi đã tráo đổi vị trí $a và $b là:  ");
        foreach ($array_str as $value) {
            echo $value . '';
        }
    } else {
        echo ("Vui lòng nhập đầy đủ dữ liệu");
    }
} else {
    echo "Vị trí nhập vào không tồn tại";
}
?>