<?php
$h = 0;   //khai báo biến chiều cao
//nhận giá trị chiều cao từ form nhập vào
if (isset($_POST['n'])) {
    $h = $_POST['n'];
}
?>

<!-- Form nhập vào chiều cao h -->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập giá trị chiều cao:</td>
            <td><input type="text" name="n" value="<?= $h ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$i = 0;
if (isset($_POST['t1'])) {
    $t = $_POST['t1'];
}
//In ra tam giác chiều cao h
if ($h > 10 || $h < 2) {
    echo "Vui lòng nhập giá trị chiều cao trong khoảng từ 2-> 10";
} else {
    while ($i <= $h) {
        $j = ($h - $i);
        while ($j < $h) {
            echo "*";
            $j++;
        }
        $i++;
        echo "<br>";
    }
}
