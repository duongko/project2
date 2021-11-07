<?php
$num = 0;

//nhận số nhập vào
if (isset($_POST['a'])) {
    $num = $_POST['a'];
}
?>
<!-- // Form nhập vào kích thước-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập kích thước n*n (3<=n<=8): </td>
            <td><input type="text" name="a" value="<?= $num ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>
<?php
function xoanoc($size)
{
    if ($size <= 0) return FALSE;

    $ar   = array();
    $used = array();

    // tạo khung mảng
    for ($j = 0; $j < $size; $j++) {
        $ar[$j] = array();
        for ($i = 0; $i < $size; $i++)
            $ar[$j][$i]   = '-';
    }

    // đánh dấu vị trí lên-xuống-sang trái-sang phải mảng tăng 1 đơn vị
    for ($j = -1; $j <= $size; $j++) {
        $used[$j] = array();
        for ($i = -1; $i <= $size; $i++) {
            if ($i == -1 || $i == $size || $j == -1 || $j == $size)
                $used[$j][$i] = true;
            else
                $used[$j][$i] = false;
        }
    }

    // Điền vào lưới bằng hình xoắn ốc
    $size = 0;
    $i = 0;
    $j = 0;
    $huong = 0; // 0 - trái, 1 - xuống, 2 - phải, 3 - lên
    while (true) {
        $ar[$j][$i]   = $size++;
        $used[$j][$i] = true;

        // Hướng đi
        switch ($huong) {
            case 0:
                $i++; // sang bên phải
                if ($used[$j][$i]) {    //đã đến biên
                    $i--;
                    $j++; // quay sang bên trái, sau đó đi xuống
                    $huong = 1;
                }
                break;
            case 1:
                $j++; // đi xuống
                if ($used[$j][$i]) { // đã đến đáy
                    $j--;
                    $i--; // quay trở lại, sau đó sang trái
                    $huong = 2;
                }
                break;
            case 2:
                $i--; // sáng trái
                if ($used[$j][$i]) { // đã đến biên
                    $i++;
                    $j--; // quay lại bên trái, sau đó đi lên
                    $huong = 3;
                }
                break;
            case 3:
                $j--; // đi lên
                if ($used[$j][$i]) { // đã lên đầu
                    $j++;
                    $i++; // quay trở lại, rồi sang phải
                    $huong = 0;
                }
                break;
        }

        // nếu vị trí mới được sử dụng thì đã hoàn tất
        if ($used[$j][$i])
            return $ar;
    }
}

//Tạo hàm in ra kết quả
function show($array)
{
    foreach ($array as $hang) {
        foreach ($hang as $cot) {
            print sprintf("% 2d ", $cot);
            // echo $cot . "  ";
        }
        print "<br>";
    }
}

//In kết quả
if ($num == 0) {
    echo "Vui lòng nhập kích thước";
} else
  if ($num <= 8 && $num >= 3) {
    show(xoanoc($num));
} else {
    echo "Kích thước nhập vào không hợp lệ";
}



?>