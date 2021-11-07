<?php
$dayso = 0;
$arr = array();
//nhận dãy số nhập vào
if (isset($_POST['n'])) {
    $dayso = $_POST['n'];
} 
?>

<!-- // Form nhập vào dãy số-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập dãy số tự nhiên:</td>
            <td><input type="text" name="n" value="<?= $dayso ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>
<?php
$arr = explode(",", $dayso);    //tách giá trị sau dấu ',' và thêm vào mảng
$count = count($arr);
$min = min($arr);       //giá trị nhỏ nhất trong dãy số nhập vào
$max = max($arr);    //giá trị lớn nhất trong dãy số nhập vào

$sub = array();   //mảng con 

for ($a = 0; $a <= $max + 1; $a++) {

    if (!in_array($a, $arr)) {
        $sub[] = $a;
    }
}

$c = min($sub);

if ($min == 0) {
    echo 'Số tự nhiên c nhỏ nhất không bằng bất kì số nào trong dãy số trên là: 0';
} else {
    echo "Số tự nhiên c nhỏ nhất không bằng bất kì số nào trong dãy số trên là: " . $c;
}


?>