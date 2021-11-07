<?php
$dayso = 0;
$arr=array();
//nhận dãy số nhập vào
if (isset($_POST['n'])) {
    $dayso = $_POST['n'];
}

// ?>
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
$min = min($arr);       //tìm giá trị nhỏ nhất trong mảng
$key = array();     
 
//Vòng lặp tìm các key của giá trị min
for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $min){
            $key[] = $i;    //lưu các key vào mảng
        } 
}

//In ra kết quả
echo "Giá trị nhỏ nhất là $min, nằm tại vị trí key bằng ";
foreach ($key as $value) {
    echo $value . ' ';
}
?>
 