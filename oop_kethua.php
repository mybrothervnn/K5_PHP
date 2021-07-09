<?php
//Vận dụng KẾ THỪA
//Y/C": tạo lớp cho các loại
// Hình tam giác, CN, vuông, tròn. 
// chung: 
//-Tên Loại Hình
//-Số cạnh
//+tinhDienTich()
//+tinhChuVi
class Hinh{
    var $tenLoaiHinh;
    var $soCanh;
    function tinhDienTich(){} // mơ hồ
    function tinhChuVi(){
        echo "Chu vi hình này là: Chưa tính được<br>";
    }
}

//Xây dựng lớp cha (chung) trước. 
//Xây dựng các lớp con kế thừa từ lớp cha. 
class HinhTamGiac extends Hinh{
    var $a,$b,$c;
    function __construct()
    {
        $this->tenLoaiHinh = "Hình tam giác";
        $this->soCanh = 3;
    }
    //ghi đè(Overide) phương thức tính chu vi của lớp cha
    function tinhChuVi(){
        echo "Chu vi: ".($this->a + $this->b + $this->c)."<br>";
    }
}
class HinhChuNhat extends Hinh{
    var $dai,$rong;
    function __construct(){
        $this->tenLoaiHinh = "Hình chữ nhật";
        $this->soCanh = 4;
    }
}
class HinhVuong extends HinhChuNhat{
    // function __construct()
    // {      
    //     // mong muốn: vẫn chạy constructor của lớp cha   
    //     // gọi contructor của lớp cha
    //     parent::__construct();       
    //     $this->tenLoaiHinh = "Hình Vuông";
    //     $this->dai = $this->rong;
    // }
    //overload:	là việc tạo ra 1 hàm cùng tên với hàm khác, nhưng số lượng đối số khác nhau.				
	//-> tăng tính linh động cho sử dụng hàm. 	
    function __construct($canh)
    {   
        $this->tenLoaiHinh = "Hình vuông";        
        $this->soCanh = 4;
        $this->dai = $canh;
        $this->rong = $canh;
    }			
}


//Tạo đối tượng và thử nghiệm (print_r, gọi phương thức.)
$tg1 = new HinhTamGiac;
$tg1->a = 5;
$tg1->b = 6;
$tg1->c = 7;
$tg1->tinhChuVi();
print_r($tg1);
echo "<br>========================<br>";
$cn1 = new HinhChuNhat;
$cn1->tinhChuVi();
print_r($cn1);

echo "<br>========================<br>";
$hv1 = new HinhVuong(10);
$hv1->tinhChuVi();
print_r($hv1);