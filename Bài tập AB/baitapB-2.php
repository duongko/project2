<?php
$n=0; 
//nhận giá trị N nhập vào
if (isset($_POST['n'])) {
    $n = $_POST['n'];
}
$tong=0;   //khai báo biến tính tổng
$p=1;   //khai báo tích
?>

<!-- Form nhập vào số nguyên N -->
<form action="#" method="post">
    <table>
    <tr>
        <td>S = 1 + 1/2! + 1/3! + … + 1/N!</td>
        </tr>
        <tr>
        <tr>
            <td>Nhập số nguyên N:</td>
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
    $p*=$i;     //cộng dồn tổng giai thừa
    $tong+=1/$p;   //cộng dồn tổng
}
echo "Với N = $n tổng S = ".$tong;    //in ra kết quả
?>