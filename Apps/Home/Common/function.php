<?php

/**
 * 返回数组维度
 * @param type $array
 * @return int
 */
function array_depth($array) {
        if(!is_array($array)) return 0;
        $max_depth = 1;
        foreach ($array as $value) {
            if (is_array($value)) {
                $depth = array_depth($value) + 1;

                if ($depth > $max_depth) {
                    $max_depth = $depth;
                }
            }
        }
        return $max_depth;
    }
/**]
 * 格式化时间戳  
 * 传入数组  和字段
 */
function Ftime($arr,$filed){
        //判断数组维度
        if(array_depth($arr)==2)
        {
            $i = 0;
             while($arr[$i]['id']){
                 $arr[$i][$filed] = date("Y-m-d H:i:s",$arr[$i][$filed]);
                 $i++;
             }
        }else{
                 $arr[$filed] = date("Y-m-d H:i:s",$arr[$filed]);
        }
         return $arr;
    }
