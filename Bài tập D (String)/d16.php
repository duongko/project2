<?php
$s1 = '';
$s2 = '';
//nhận xâu
if (isset($_POST['s1'])) {
    $s1 = $_POST['s1'];
}
if (isset($_POST['s2'])) {
    $s2 = $_POST['s2'];
}
?>
<!-- // Form nhập vào-->
<form action="#" method="post">
    <table>
        <h4>Kiểm tra xâu S1 có phải là con của xâu S2 không?</h4>
        <tr>
            <td>Nhập xâu S1: </td>
            <td><input type="text" name="s1" value="<?= $s1 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S2: </td>
            <td><input type="text" name="s2" value="<?= $s2 ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>
<?php
$arr1 = str_split($s1);     //tách các kí tự thành từng phần tử mảng
$arr2 = str_split($s2);

$isSubset = array_diff($arr1, $arr2);    //mảng các phần tử có trong arr1 nhưng k có trong arr2
if ($s1 == '' || $s2 == '') {
    echo "Hãy nhập xâu!";
} else {
    if (!$isSubset) {
        echo 'Xâu S1 là xâu con của xâu S2';
    } else {
        echo 'Xâu S1 không phải là xâu con của xâu S2';
    }
}



?>