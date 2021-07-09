<?php
//Vận dụng private,protected,public
/*
private: riêng -> chỉ bản thân đối tượng sở hữu mới sử dụng được 
protected: bảo vệ (chỉ có kế thừa mới sử dụng được)
public: công cộng -> toàn bộ đều sử dụng được
*/

//Chung: 
//TaiKhoan
// -
// -
// +
// +
class TaiKhoan{
    var $id="000"; //public
    protected $soTien = 50000000; //protected: bảo vệ (chỉ có kế thừa mới sử dụng được)
    private $pass="123456"; //private

    private function doiMatKhau(){//private
        $this->pass = "654321";
    }
    function dangNhap($ten, $pass){//public
        if($this->id == $ten && $this->pass == $pass)
            echo "dang nhap thanh cong";
        else 
            echo "dang nhap that bai";
    }
}

$tk1 = new TaiKhoan;
//($tk1->pass);
echo $tk1->id."<br>";
$tk1 -> dangNhap("000","12345");
//$tk1 -> doiMatKhau();
//echo $tk1->soTien;

//rieng: 
// TKVip
class TKVIP extends TaiKhoan{
    function truyVanTaiKhoan(){
        echo "Tai khoan: ".$this->id."<br>";
        echo "So thien: ".$this->soTien."<br>";
        //echo "Mật khẩu: ".$this->pass."<br>";
    }
}

$tkVip1 = new TKVIP;
$tkVip1->truyVanTaiKhoan();
//TKThuong