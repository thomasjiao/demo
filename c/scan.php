<?php
function dir2Array($dir) {
    $result = array();
    var_dump($dir);
    $result['DIR_NAME'] = $dir;
    $cdir = scandir($dir);
    foreach($cdir as $k => $v) {
        if(!in_array($v, array('.', '..'))) {
            if(is_dir($dir.DIRECTORY_SEPARATOR.$v)) {
                $result['FILES'][$v] = dir2Array($dir.DIRECTORY_SEPARATOR.$v);
            } else {
                $result['FILES'][$v] = $dir.DIRECTORY_SEPARATOR.$v;
            }
        }
    }
    return $result;
}


$arr = dir2Array(__DIR__);
print_r($arr);
