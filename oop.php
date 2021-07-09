<?php
// OOP: Object oriented Programming
//khai báo lớp
class Cho {
    //THUỘC TÍNH
    var $ten;
    var $mauLong;
    const SO_CHAN = 4;

    // PHƯƠNG THỨC
    function keu(){
        echo "GAU GAU";
    }
};

// tạo 1 biến của lớp trên. 
$conCho1 = new Cho(); // lúc khởi tạo đối tượng


$conCho1->ten = "MILU";// gán giá trị cho thuộc tính 
$conCho1->ten = "Michael ". $conCho1->ten;
$conCho1->mauLong = "Vàng";

$conCho2 = new Cho();
// ví dụ sử dụng thuojc tính, phương thức từ bên ngoài
echo "Tên của con chó số 1: ". $conCho1->ten; // cách lấy giá trị thuộc tính
echo "<br>";
echo "màu lông của con chó số 1: ". $conCho1->mauLong;
echo "<br>";
echo "Số chân của chó: ". Cho::SO_CHAN; // cách lấy giá trị thuộc tính CONST
echo "<br>";
// cách gọi chức năng của 1 đối tượng
echo "con này kêu: ";
$conCho1->keu();



