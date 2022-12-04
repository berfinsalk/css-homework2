<?php
echo "<pre>";
$planets =["merkür","venüs","dünya","mars","","", NULL,"uranüs",NULL,"neptün"];
$new=array_filter($planets,function($e)         //array_filter ile boş değerleri temizledik
         {
            return $e=="" & NULL ? false: $e;
         }
);
$new1=array_rand($new,2);                 //array_rand ile filtrelenmiş diziyi (yeni diziye atarak) random olarak yazdırdık

print_r($new1);
?>