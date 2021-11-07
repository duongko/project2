<?php
$N=0;      
//nhận giá trị N nhập vào
if (isset($_POST['n'])) {
    $n = $_POST['n'];
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
//khởi tạo hàm tính F(n)
function fibonaxi($n) {
    $f0 = 0;    //khai báo F(k-2)
    $f1 = 1;    //khai báo F(k-1)
    $fn = 1;    //khai báo F(k)
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        //Tính F(N)
        for($i = 2; $i <= $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
    //in ra số fibonaxi thứ N
    echo "Số fibonaxi thứ N là: ".(fibonaxi ( $N ));
?>