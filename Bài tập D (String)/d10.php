<?php
//Giả sử có 10 xâu được nhập vào: S1, S2, S3, S4, S5
$s1='';
$s2='';
$s3='';
$s4='';
$s5='';
$s6='';
$s7='';
$s8='';
$s9='';
$s10='';
//nhận dãy số nhập vào
if (isset($_POST['s1'])) { $s1 = $_POST['s1'];}
if (isset($_POST['s2'])) {$s2 = $_POST['s2'];}
if (isset($_POST['s3'])) {$s3 = $_POST['s3'];}
if (isset($_POST['s4'])) {$s4 = $_POST['s4'];}
if (isset($_POST['s5'])) {$s5 = $_POST['s5'];}
if (isset($_POST['s6'])) {$s6 = $_POST['s6'];}
if (isset($_POST['s7'])) {$s7 = $_POST['s7'];}
if (isset($_POST['s8'])) {$s8 = $_POST['s8'];}
if (isset($_POST['s9'])) {$s9 = $_POST['s9'];}
if (isset($_POST['s10'])) {$s10 = $_POST['s10'];}
?>
<!-- // Form nhập vào dãy số-->
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập xâu S1: </td>
            <td><input type="text" name="s1" value="<?= $s1 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S2: </td>
            <td><input type="text" name="s2" value="<?= $s2 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S3: </td>
            <td><input type="text" name="s3" value="<?= $s3 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S4: </td>
            <td><input type="text" name="s4" value="<?= $s4 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S5: </td>
            <td><input type="text" name="s5" value="<?= $s5 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S6: </td>
            <td><input type="text" name="s6" value="<?= $s6 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S7: </td>
            <td><input type="text" name="s7" value="<?= $s7 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S8: </td>
            <td><input type="text" name="s8" value="<?= $s8 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S9: </td>
            <td><input type="text" name="s9" value="<?= $s9 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S10: </td>
            <td><input type="text" name="s10" value="<?= $s10 ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$array = array($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10);  //thêm xâu vào mảng
$array_length = array();    //mảng chứa chiều dài các xâu nhập vào
$count=count($array);   //số xâu nhập vào
$key = array();     //mảng chứa các key của xâu có độ dài lớn nhất

for ($i=0; $i < $count; $i++) {     //tìm chiều dài các xâu
    $array_length[]=strlen($array[$i]);
}

$max = max($array_length);      //chiều dài lớn nhất
for ($i=0; $i < $count; $i++) {     //tìm key các chuỗi có chiều dài lớn nhất
    if(strlen($array[$i])==$max){
            $key[]=$i;
    }
}
//In ra kết quả
echo "Các xâu có độ dài lớn nhất gồm $max kí tự là: <br> ";
for ($i=0; $i < count($key) ; $i++) { 
   echo $array[$key[$i]].'<br>';
}
?>