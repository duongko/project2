<?php
$dayso = 0;
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
 //tách giá trị sau dấu ',' và thêm vào mảng
$arr = explode(",", $dayso);
//đếm số lượng phần thử của mảng
$count = count($arr);
//khởi tạo hàm kiểm tra nguyên tố
    function nguyento($n){
        if($n<2){ 
            return false;
        }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
           return false;
        }
    }
    return true;
}
//In kết quả
echo'Các số nguyên tố có trong dãy số là: ';
//Vòng lặp for chạy giá trị key trong mảng
for ($j=0; $j < $count; $j++) { 
  if (nguyento($arr[$j])) {
    echo $arr[$j].' ';
  }
}
?>
