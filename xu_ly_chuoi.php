<?php
// CÁC HÀM XỬ LÝ CHUỖI TRONG PHP
//1. explode()
// $data = explode('o', "Toidicode.com");

// print_r($data);
//2. implode()
//3. strlen()
//4. substr() lấy 1 chuỗi con trong chuỗi cha
//5. trim() : loại bỏ ký tự trắng ở đầu và cuối chuỗi 
// $str = " ab c  ";
// echo strlen($str); // 7
// $str2 = trim($str);
// echo $str2; //ab c
// echo strlen($str2);//
// echo trim(" vũ thanh tài ");
// //output: Vũ thanh tài
// echo trim("VabcVd e V", 'V');
// echo "<br>";
// echo "abcVd e";
// echo "<br>";
// echo "  abcVd e ";
//output: vũ Thanh Tài

//6. addcslashes($str, $char_list)
//echo addcslashes("Toidicode.com", 'o');
// output: T\oidic\ode.c\o

//BT: abcde => {a,b,c,d,e}
$str = "abcde";
$str = addcslashes($str, 'a..zA..Z');
echo "<br>";
echo $str;
$str = ltrim($str,'\\');
echo "<br>".$str;
echo "<br>";
$arr = explode('\\',$str);

print("<pre>");
print_r($arr);
print("</pre>");

//7.addslashes($str)
//8. bin2hex($str)
// //9. str_word_count($string) sử dụng [ ],. để tách các từ.
// $data = "toidicode.com";
// echo str_word_count($data).PHP_EOL;
//output: 2

// $data = "toi di,code.com";
// echo str_word_count($data).PHP_EOL;
//output: 4

// //10. str_repeat($string, $repeat)
// $data = "toidicode.com";
// echo str_repeat($data,4);
//output: toidicode.comtoidicode.comtoidicode.comtoidicode.com

//11. str_replace($find, $replace, $string)
// $data = "toidicode.com";
// echo str_replace("t","T",$data);
//output: Toidicode.com

//12. md5($string): md5 là một dạng mã hóa theo phương pháp md5
// $data = "toidicode.com";
// echo md5($data);
//output: d04742d12d431f009e90ef4239e6a782

//13. sha1($string): mã hóa theo phương pháp sha 1
// $data = "toidicode.com";
// echo sha1($data);
//output: 49debc628ec279341836be4485897afd5af078ae

// 14. substr(string,start,length)
// echo substr("Hello world", 9) . "<br>"; //ld
// echo substr("Hello world", -5) . "<br>"; //w
// echo substr("Hello world", 0, 4) . "<br>"; //Hell
// echo substr("Hello world", 0, -2) . "<br>"; //Hello wor

//15. strtolower($string)

//16. strtoupper($string)
// sử dụng: bạn tiếp tục hay không (Y/y):(N/n)
//if(strtoupper($str) == 'Y')

//17. ucword($string) -Hàm có tác dụng chuyển đổi chữ cái đầu tiên của các từ trong chuỗi sang in hoa.
// ucwords("vũ thanh tài");
//output: Vũ Thanh Tài

//18. ucfirst($string)
// -Hàm có tác dụng chuyển đổi chữ cái đầu tiên trong chuỗi sang in hoa.
//echo ucfirst("vũ thanh tài");
//output: Vũ thanh tài

//19. ltrim($tring,$charlist)
//echo ltrim("Vvũ Thanh Tài", 'vV');
//ũ Thanh Tài
//20. rtrim($tring,$charlist)

//21. strstr( $string, $ky_tu_cho_truoc )
//Tách một chuỗi bắt đầu từ  $ky_tu_cho_truoc cho đến hết chuỗi.

//echo strstr('freetuts.net Xin Chào', 't');
// Kết quả: Xin Chào

//22. strpos($str, $chuoi_tim )
//position : vị trí
echo strpos('freetuts.net chào các bạn', 'chào');
// kết quả 13


