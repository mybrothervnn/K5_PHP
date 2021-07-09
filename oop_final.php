<?php
final class WebFinal{
    
}
class WebCoPhuongThucFinal{
    final function ptFinal(){

    }
    function ptKhongFinal(){

    }
}
class Web{
    
}

// class TinTuc extends WebFinal{// không thể kế thừa từ lớp Final

// }
class TinTuc extends WebCoPhuongThucFinal{
    function ptKhongFinal(){
        echo "ptKhongFinal";
    }
    // function ptFinal(){// không thể ghi đè phương thức final
    //     echo "ptFinal";
    // }
}