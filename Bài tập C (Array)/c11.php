<?php
$dayso = 0;
//nhận dãy số nhập vào
if (isset($_POST['n'])) {
    $dayso = $_POST['n'];
}
// 
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
//tách giá trị sau dấu ',' và thêm vào mảng
$arr = explode(",", $dayso);
//đếm số lượng phần thử của mảng nhập vào
$count = count($arr);
$sub_arr=array();
for ($i=0; $i < $count; $i++) { 
    $sub_arr[$i]= 1;    //gán các giá trị mảng con = 1
}
$max=0;
$vitri=array();

for ($i = $count-1; $i > 0; $i--) {
        if ($arr[$i]>=$arr[$i-1]) {
            $sub_arr[$i-1] = $sub_arr[$i] + 1;
        }   
}
$max=max($sub_arr);     //tìm độ dài lớn nhất
//Vòng lặp tìm các key của giá trị max
for ($i = 0; $i < $count; $i++){
    if ($sub_arr[$i] == $max){
        $vitri[] = $i;    //lưu các key vào mảng
    } 
}

//In ra kết quả
echo "Các dãy con liên tục đơn điệu tăng dài nhất của dãy trên là: <br>";
for ($i=0; $i < $count; $i++) { 
    if($sub_arr[$i]==$max){
        for ($j=$i; $j < $max+$i; $j++) {            
               echo  $arr[$j].' ';            
        }
        echo '<br>';
    }
    
}
?>
