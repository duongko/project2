<?php
$n=0; 
//nhận giá trị N nhập vào
if (isset($_POST['n'])) {
    $n = $_POST['n'];
}
$tong=0;   //khai báo biến tính tổng
$s=0;   //khai báo biến tổng giai thừa
$p=1;   //khai báo tích
?>

<!-- Form nhập vào số nguyên N -->
<form action="#" method="post">
    <table>
    <tr>
        <td>S = 1 + 1/(1+2!) + 1/(1+2!+3!)+ ..+ 1/(1+2!+3!+..+N!)</td>
        </tr>
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
// Bắt đầu lặp và cộng dồn vào biến tổng
for ($i=1; $i <= $n; $i++) { 
    $p*=$i;     //tính giai thừa
    $s+=$p;     //cộng dồn các giai thừa
    $tong+=1/$s;   //cộng dồn tổng
}
echo "Với N = $n tổng S = ".$tong;    //in ra kết quả

?>