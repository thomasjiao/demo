<?php
  
$arrarys=array();
$arrarys['aaa']="1";
$arrarys['bbb']="2";
$arrarys['ccc']="3";
$arrarys['ddd']="4";
var_dump(__FILE__);  
var_dump(__DIR__);
$txtRead=file('a.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
/*
   aaa,bbb
   aaa,ccc
   aaa,ddd
   ccc,bbb
   */
//var_dump($txtRead);exit;
echo "----------------line1-----------\n";
//reset($txtRead);
foreach($txtRead as  $content)
{
          
         $tarr=explode(',',$content);
              echo  $tarr[0]."->".$tarr[1]."\n";
}
  
echo "\n----------------line2-----------\n";
//reset($txtRead);
foreach($txtRead as  $content)
{  
         $tarr=explode(',',$content);
              echo $arrarys[$tarr[0]]."->".$arrarys[$tarr[1]]."\n";
}  
  
?> 
