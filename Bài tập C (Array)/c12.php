<?php
$day_a = 0;
$day_b = 0;
$a=array();
$b=array();
//nhận dãy số nhập vào
if (isset($_POST['a'])) {
    $day_a = $_POST['a'];
}
if (isset($_POST['b'])) {
    $day_b = $_POST['b'];
}
 ?>
<!-- // Form nhập vào dãy số-->
<h3>Kiểm tra dãy số a có là dãy con của b không?</h3>
<form action="#" method="post">
    <table>
       <tr>
             <td>Nhập dãy số a:</td>
            <td><input type="text" name="a" value="<?= $day_a ?>" /></td>
         </tr>
         <tr>
             <td>Nhập dãy số b:</td>
            <td><input type="text" name="b" value="<?= $day_b ?>" /></td>
         </tr>
         <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
 </form>
 <br>
 <?php
$a = explode(",", $day_a);    //thêm số của dãy a vào mảng
$b = explode(",", $day_b);    //thêm số củb dãy b vào mảng

$counta = count($a);
$check = array();

//Vòng lặp tìm các số của mảng a cũng có trong mảng b
for ($i = 0; $i < count($a); $i++){
    if (in_array($a[$i], $b)) {
        $check[]=$i;
    }
}
//in kết quả
  if(count($check)==$counta){
      echo "Dãy a là dãy con của b";
  }else{
      echo "Dãy a không phải là dãy con của b";
  }   
 


?>
 