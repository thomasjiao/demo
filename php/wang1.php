<?php
/** 
 * title: 判断表达式中括号是否匹配  
 * Description: () 匹配  )(不匹配 利用压栈和出栈  
 * @author Mr Lv     
 * @date 2011-11-28    
 */      
function isValid($expstr) {  
    $temp = array();  
    for ($i=0; $i<strlen($expstr); $i++) {  
        $ch = $expstr[$i];  
        switch($ch) {  
            case '(':  
                array_push($temp, '(');  
                break;  
            case ')':  
                if (empty($temp) || array_pop($temp) != '(') {  
                    return "缺少左括号（";  
                }  
        }  
    }  
    return empty($temp) == true ? "表达式匹配" : "缺少右括号）";  
}  
$expstrA = "(1+3(6*4)-(2+3))()(";  
$expstrB = "(1+3(6*4)-(2+3))()";  
$expstrC = "(1+3(6*4)-(2+3)))";  
echo isValid($expstrA);  
echo "<br>";  
echo isValid($expstrB);  
echo "<br>";  
echo isValid($expstrC);  
?>   
