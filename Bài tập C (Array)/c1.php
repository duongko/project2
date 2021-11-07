<?php
$dayso=0;
//nhận giá trị nhập vào
if (isset($_POST['n'])) {
    $dayso = $_POST['n'];
}
$arr=0;
?>
<!-- Form nhập vào dãy số-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập dãy số tự nhiên:</td>
            <td><input type="text" name="n" value="<?= $dayso ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Sắp xếp"></td>
        </tr>
    </table>
</form>
<br>
<?php
//thêm phần tử sau dấu ',' vào mảng
$arr=explode(",", $dayso);
$sophantu = count($arr);

// dùng thuật toán sắp xếp nổi bọt
for ($i = 0; $i < ($sophantu - 1); $i++)
{
    for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
    {
        if ($arr[$i] < $arr[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
}
//In ra kết quả
echo ("Kết quả dãy số đã sắp xếp là:  ");
        foreach ($arr as $value) {
            echo $value . ' ';
        }
?>