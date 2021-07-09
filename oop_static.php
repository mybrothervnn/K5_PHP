<?php
// static = tĩnh
//self = bản thân nó

class App { //web site
    private static $ttStatic = 1;
    private $ttNoStatic = 2;
    function __construct()
    {
        self::$ttStatic = 10;
        $this->ttNoStatic = 5;
    }
    //getter: chức năng đọc thuộc tính
    public static function getTtStatic(){
        return static::$ttStatic;
    }
    public function getTtNoStatic(){
        return $this->ttNoStatic;
    }
    
    // public static function getThongTin(){// static chỉ được phép suwrdungj static
    //     return $this->ttNoStatic;
    // }
    //setter: chức năng set (nhập dữ liệu) cho thuộc tính
    function setTtStatic($ttStatic){
        App::$ttStatic = $ttStatic;
    }
    function setTtNoStatic($a){
        $this->ttNoStatic = $a;
    }
}
class Module { // kết nối database

}

//tạo đối tượng app
$obj = new App();
//unset($obj); // hủy đối tượng


echo "ttStatic: ".App::getTtStatic()."<br>";
//echo "ttStatic: ".$obj->getTtStatic()."<br>";
$obj->setTtNoStatic(100);

echo "ttNoStatic: ".$obj->getTtNoStatic()."<br>";

$obj->setTtNoStatic(500);

echo "ttNoStatic: ".$obj->getTtNoStatic();
