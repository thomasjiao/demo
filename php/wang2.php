<?php
function search($key, $array) {
    $top = count($array) - 1;
    $low = 0;
    $mid = 0;

    while ($low <= $top) {
        $mid = floor(($top+$low)/2);
        if($array[$mid] == $key){

            return $mid;
        }
        if($array[$mid] > $key){
            $top = $mid - 1;
        }else {
            $low = $mid + 1;
        }
    }
    return false; 
}

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 888);
$position = search(10, $arr);

if($position !== false){
    print('搜索元素的索引是:' . $position . "\n"); 
}else{
    print("没有搜索到元素\n");
}
?>
