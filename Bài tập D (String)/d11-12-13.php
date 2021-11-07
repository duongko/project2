<?php
//Giả sử danh sách có 10 tên
$s1 = 'Nguyễn An';
$s2 = 'Nguyễn Thị Mỹ Linh';
$s3 = 'Nguyễn Văn A';
$s4 = 'Đinh Văn Hào';
$s5 = 'Nguyễn An';
$s6 = 'Trần He';
$s7 = 'Trần Anh An';
$s8 = 'Lê Thị Ân';
$s9 = 'Trần Hòa An';
$s10 = 'Bùi Nhật Hạnh';

?>
<!-- // Danh sách họ và tên-->
<tr>
    Cho danh sách họ và tên đầy đủ sau: <br>
    Nguyễn An. <br>
    Nguyễn Thị Mỹ Linh <br>
    Nguyễn Văn A <br>
    Đinh Văn Hào <br>
    Nguyễn An. <br>
    Trần He <br>
    Trần Anh An. <br>
    Lê Thị Ân <br>
    Trần Hòa An. <br>
    Bùi Nhật Hạnh <br>
<tr><br><br>
    <?php
    $array = array($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10);  //thêm xâu vào mảng
    $count = count($array);   //số xâu nhập vào
    $ten = 0;
    $tendem = 0;
    $h=0;
    for ($i = 0; $i < $count; $i++) {
        $full = explode(" ", $array[$i]);     //tách ra các từ trong từng họ và tên gán vào mảng
        $arr_ten[] = array_pop($full);       //lấy ra phần từ cuối cùng chính là tên
        $arr_ho[] = array_shift($full);        //lấy ra phần tử đầu tiên chính là họ

        //mảng $full lúc này chứa phần kết nối còn lại là phần đệm
        if ($arr_ten[$i] == 'An') {
            $ten += 1;
        }
        if(substr($arr_ten[$i],0,1)=='H'){      //Tách ra ký tự đầu tiên trong tên và kiểm tra
            $h+=1;
        }
        if (in_array("Thị", $full)) {       //kiểm tra phần tử "Thị" có nằm trong phần đệm không
            $tendem += 1;
        }
    }

    echo ' Số học sinh có tên là "An" trong danh sách là: <b>' . $ten.'</b>';
    echo '<br>Số học sinh có phần đệm là "Thị" trong danh sách là: <b>' . $tendem.'</b>';
    echo '<br>Số học sinh có tên bắt đầu bằng chữ "H" trong danh sách là: <b>' . $h.'</b>';
    ?>