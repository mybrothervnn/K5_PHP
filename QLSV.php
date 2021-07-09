<?php 
$a = 5;
class SinhVien{
    var $maSV;
    var $tenSV;
    var $ngaySinh;
    var $gioiTinh;
    var $tuoi;
    const MUC_HOC_PHI=1000000;  

    function getMaLop(){
        echo 'K4'.'|';
        echo 'K5';
    }
    function getTenLop(){
        echo 'Lớp 4'.'|';
        echo 'Lớp 5';
    }
    function getTTGVCN(){
        echo 'Thầy Hòa'.'|';
        echo 'Thầy Thành';
    }
    function dangKyHocPhan(){
        echo "Sinh vien".$this->maSV."đã được đăng ký thành công";
    }
    function dangKy(){
        $this->dangKyHocPhan();
    }

    function sinhNhat(){
        $this->tuoi ++;
    }
    function traoDoi(SinhVien $svKhac){
       echo "Sinh viên ".$this->tenSV." đang trao đổi với sinh viên ".$svKhac->tenSV;
    }
}
class Lop {
    var $maLop;
    var $tenLop;
    var $danhSachSV = array();

    // đưa sinh vào lớp 
    function addSinhVien(SinhVien $sv){
        $this->danhSachSV[] = $sv;
    }
}

$SV1= new sinhvien();
$SV1->maSV="SV001";
$SV1->tenSV="Thông";
$SV1->ngaySinh="06/21/2021";
$SV1->gioiTinh="Nam";
$SV1->tuoi="20";


echo "Mã của Sinh Viên: ".$SV1->maSV;
echo "<br>";
echo "Tên của Sinh Viên: ".$SV1->tenSV;
echo "<br>";
echo "Ngày sinh của Sinh Viên: ".$SV1->ngaySinh;
echo "<br>";
echo "Gioi tính của Sinh Viên: ".$SV1->gioiTinh;
echo "<br>";
echo "Tuổi của Sinh Viên: ".$SV1->tuoi;
echo "<br>";
echo "Học phí: ".SinhVien::MUC_HOC_PHI;
echo"<br>";
echo $SV1->getMaLop();
echo "<br>";
echo $SV1->getTenLop();
echo "<br>";
echo $SV1->getTTGVCN();
echo "<br>";
echo "-------------------------------------------";


$SV2= new sinhvien();
$SV2->maSV="SV002";
$SV2->tenSV="Long";
$SV2->ngaySinh="06/21/2021";
$SV2->gioiTinh="Nam";
$SV2->tuoi="20";

echo "<br>";
echo "Mã của Sinh Viên: ".$SV2->maSV;
echo "<br>";
echo "Tên của Sinh Viên: ".$SV2->tenSV;
echo "<br>";
echo "Ngày sinh của Sinh Viên: ".$SV2->ngaySinh;
echo "<br>";
echo "Gioi tính của Sinh Viên: ".$SV2->gioiTinh;
echo "<br>";
echo "Tuổi của Sinh Viên: ".$SV2->tuoi;
echo "<br>";
echo "Học phí: ".SinhVien::MUC_HOC_PHI;
echo"<br>";
echo $SV2->getMaLop();
echo "<br>";
echo $SV2->getTenLop();
echo "<br>";
echo $SV2->getTTGVCN();
echo "<br>";
echo "-------------------------------------------";


$SV3= new sinhvien();
$SV3->maSV="SV003";
$SV3->tenSV="Thủy";
$SV3->ngaySinh="06/21/2021";
$SV3->gioiTinh="Nữ";
$SV3->tuoi="20";

echo "<br>";
echo "Mã của Sinh Viên: ".$SV3->maSV;
echo "<br>";
echo "Tên của Sinh Viên: ".$SV3->tenSV;
echo "<br>";
echo "Ngày sinh của Sinh Viên: ".$SV3->ngaySinh;
echo "<br>";
echo "Gioi tính của Sinh Viên: ".$SV3->gioiTinh;
echo "<br>";
echo "Tuổi của Sinh Viên: ".$SV3->tuoi;
echo "<br>";
echo "Học phí: ".SinhVien::MUC_HOC_PHI;
echo"<br>";
echo $SV3->getMaLop();
echo "<br>";
echo $SV3->getTenLop();
echo "<br>";
echo $SV3->getTTGVCN();
echo "<br>";

//===============
echo "MAIN PROGRAM: <br>";
print_r($SV1);
$SV1->dangKy();
$SV2->dangKy();

// check hàm tăng số tuổi: 
echo "<br>";
echo "tuổi của SV1 là: ". $SV1->tuoi;

$SV1->sinhNhat();
echo "<br>";
echo "tuổi của SV1 là: ". $SV1->tuoi;

// check hàm trao đổi: 
echo "<br>";
$SV1->traoDoi($SV2);
// Sinh viên [Thông] đang trao đổi với sinh viên [Long]

echo "<br>";
$SV2->traoDoi($SV1);
// Sinh viên [Long] đang trao đổi với sinh viên [Thông]
//===============
//YC: 
// tao2 lớp K4 và K5
// Thủy thuộc lớp K4
// Thông và Long thuộc lớp K5
//in ra thông tin
$K4 = new Lop();
$K4->maLop="K4";
$K4-> tenLop = "lop 4"; 
$K4 -> addSinhVien($SV3);
print_r($K4);
echo "<br>";
$K5 = new Lop();
$K5 -> maLop ="K5";
$K5-> tenLop = "lop 5"; 
$K5 -> addSinhVien($SV1);
print_r($K5);
echo "<br>";
$K5 -> addSinhVien($SV2);
print_r($K5);
echo "<br>";


//1. viết hàm lấy số lượng sinh viên
//2. Sử dụng hàm trên để in ra số lượng sinh viên của các lớp: 
/*Kết quả mong muốn
Lớp: K4 - Số lượng SV: 1
Lớp: K5 - Số lượng SV: 2
*/
echo " ==============";

// kiểm tra xem có sinh viên tên Thông ở trong lớp K4 hay không ? 
$tam = false;
foreach($K4->danhSachSV as $sv){
    if($sv->tenSV == "Thông")
        $tam = true;
}

if($tam == true)
    echo "CÓ người tên Thông trong lớp K4";
else 
    echo "KHÔNG CÓ người tên Thông trong lớp K4";
/*có*/
/*không có*/
// kiểm tra xem có sinh viên tên Long ở trong lớp K5 hay không ? 
//print_r($K5->danhSachSV);
// giải thuật sử dụng cờ tạm
$tam = false;
foreach($K5->danhSachSV as $sv){
    if($sv->tenSV == "Long")
        $tam = true;
}

if($tam == true)
    echo "CÓ người tên Long trong lớp K5";
else 
    echo "KHÔNG CÓ người tên Long trong lớp K5";
/*có*/
