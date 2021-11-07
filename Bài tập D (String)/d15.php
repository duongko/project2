<?php
$s1='';
$s2='';
//nhận xâu nhập vào
if (isset($_POST['s1'])) { $s1 = $_POST['s1'];}
if (isset($_POST['s2'])) {$s2 = $_POST['s2'];}
?>
<!-- // Form nhập vào xâu-->
<form action="#" method="post">
    <table>
    <h4>Chèn xâu S1 vào giữa xâu S2 </h4>
    <tr>
            <td>Nhập xâu S1: </td>
            <td><input type="text" name="s1" value="<?= $s1 ?>" /></td>
        </tr>
        <tr>
            <td>Nhập xâu S2: </td>
            <td><input type="text" name="s2" value="<?= $s2 ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<br>

<?php
$length = strlen($s2);      //độ dài xâu s2
$pos = floor($length/2);    //xác định vị trí giữa xâu s2
$firt_str = substr( $s2, 0 , $pos);     //tách phần đầu của xâu s2
$last_str = substr( $s2, $pos);          //tách phần sau của xâu s2
$result = "$firt_str"."$s1"."$last_str";        //nối xâu s1 vào giữa 2 xâu
echo 'Kết quả sau khi chèn xâu S1 vào giữa xâu S2 là: <b>'.$result.'</b>';   //in ra kết quả

?>