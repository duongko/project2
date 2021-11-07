<?php
$arr_name = array('Nguyễn Hoàng Anh', 'Hoàng Thị Linh', 'Vũ Anh Tuấn', 'Nguyễn Thị Mai','Lê Văn Lâm','Trần Tiến Lượng');
$arr_tuoi= array(21,20,23,20,23,23);
$arr_quequan= array('Ninh Bình','Hải Dương','Đà Nẵng','Hà Nội','Đà Nẵng','Thanh Hóa');
for ($i=0; $i < count($arr_tuoi); $i++) { 
    if ($arr_tuoi[$i]==20) {
        unset($arr_name[$i]);
        unset($arr_tuoi[$i]);
        unset($arr_quequan[$i]);
    }
    
}
if( isset($_POST['submit']) ) {
    $arr_name[]=$_POST['hoten'];
    $arr_tuoi[]=$_POST['tuoi'];
    $arr_quequan[]=$_POST['quequan'];
    }

class Sinhvien
{
    private $id;
    private $name;
    private $tuoi;
    private $quequan;
    public function __construct($id, $name, $tuoi, $quequan)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tuoi = $tuoi;
        $this->quequan = $quequan;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function get_quequan()
    {
        return $this->quequan;
    }
    public function get_tuoi()
    {
        return $this->tuoi;
    }
    public function setname(float $name)
    {
        $this->name = $name;
    }

    public function set_tuoi(float $tuoi)
    {
        $this->tuoi = $tuoi;
    }
    public function setquequan(float $quequan)
    {
        $this->quequan = $quequan;
    }

}


?>
<!DOCTYPE html>

<head>
    <title>Bai tap tu chon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="heading">
            <br>
            <h3>Danh sách các sinh viên 20 tuổi</h3>
            <hr>
            <div id="wrapper">
                <div class="row">
                    <?php
                    $id=0;
                    while($id<count($arr_name)){
                    // create new user info
                    // $sv = new Sinhvien($id, $arr_name[$id], $arr_tuoi[$id], $arr_quequan[$id]);
                    //output user info
                    echo "Mã: " . $sv->getID() . "<br/>";
                    echo "Họ Tên: " . $sv->getName() . "<br/>";
                    echo "Tuổi: " . $sv->get_tuoi() . "<br/>";
                    echo "Quê quán: " . $sv->get_quequan() . "<br/><br><br><hr>";
                    $id++;
                }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
    <br><br>

    <div class="container">
        <div class="heading">

        </div>
        <h3>--Thêm học sinh mới--</h3>
        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <form id="form" action="" method="POST">
                    <input type="text" id="hoten" name="hoten" class="form-control" placeholder="Họ và tên">
                    <br>
                    <input type="number" name="tuoi" min="6" size="3" class="form-control" placeholder="Tuổi">
                    <br>
                    <textarea name="quequan" cols="40" rows="2" class="form-control" placeholder="Quê quán"></textarea>
                    <br>
                    <input type="submit" name="submit" value="Xác nhận" class="btn btn-primary">
                </form><br>
                <form action="list.php">
                    <button class="csw-btn-button" type="submit">Danh sách các sinh viên 20 tuổi</button>
                </form><br>
                <form action="">
                    <button class="csw-btn-button" type="submit">Số lượng sinh viên 23 tuổi, quê ở Đà Nẵng</button>
                </form><br><br>
            </div>
        </div>
    </div>


</body>

</html>