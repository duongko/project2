<?php
$n = 0;         //khai báo biến nguyên dương N
//nhận giá trị N nhập vào
if (isset($_POST['n'])) {
    $n = $_POST['n'];
}
function phanTichSoNguyen($n){
    $i = 2;
    $arrNumbers = array();
    $arrNumbers[0] = "";
    $count = 0;

    // phân tích số nguyên N thành tích các số nguyên tố
    while ($n > 1) {
        if ($n % $i == 0) {
            $n = floor($n / $i);
            $arrNumbers[$count] = $i;
            $count = $count + 1;
        } else {
            $i++;
        }
    }
    // nếu arrNumber trống thì add n vào arrNumber
    if ($arrNumbers[0] == "") {
        $arrNumbers[0] = $n;
    }
    return $arrNumbers;
}
?>

<!-- Form nhập vào số nguyên N -->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập số nguyên:</td>
            <td><input type="text" name="n" value="<?= $n ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
if (filter_var($n, FILTER_VALIDATE_INT)) {
    $arrNumbers = phanTichSoNguyen($n);  
        
    // in kết quả ra màn hình
    echo ("Ước nguyên tố nhỏ nhất của $n là: " . min($arrNumbers));       //in phần tử nhỏ nhất trong mảng
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>