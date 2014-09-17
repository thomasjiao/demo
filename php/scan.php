<?php
function dir2Array($dir) {
    $result = array();
    if(!is_dir($dir)) {
        $result['FILE'] = $dir;
        return $result;
    }
    $cdir = scandir($dir);
    foreach($cdir as $k => $v) {
        if(!in_array($v, array('.', '..'))) {
            if(is_dir($dir.DIRECTORY_SEPARATOR.$V)) {
                $result[$v] = dir2Array($dir.DIRECTORY_SEPARATOR.$v);
            } else {
                $result[] = $v;
            }
        }
    }
    return $result;
}


$arr = dir2Array(__DIR__);
print_r($arr);
