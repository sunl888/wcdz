<?php

//+----------------------------------------------------
//| E8工作室 http:www.e8net.cn
//+----------------------------------------------------
//| 公共函数库,提供可供公共调用的函数
//+----------------------------------------------------
//| Time: 2014/8/27
//+----------------------------------------------------
//| Form: Function Name + Description + Author + Time
//+----------------------------------------------------
//| searchReplaceKw() + 搜索描红 + webdd + 2014/8/27
//+----------------------------------------------------
//| subtitle() + 字符截取 + webdd + 2014/8/27
//+----------------------------------------------------
//| timeToNow() + 计算指定时间距今天过了多久 + webdd + 2014/8/27
//+----------------------------------------------------


/**
 * 格式化打印函数，用于格式化打印数组信息
 * 调试使用
 *
 * @param unknown $con
 * @author webdd
 */
function p($con) {
	echo "<pre>";
	var_dump ( $con );
	die ();
}


/**
 * 将搜索结果中包含的关键字描红
 *
 * @param String $string        	
 * @param String $sokw        	
 * @return String
 */
function searchReplaceKw($string, $sokw = '') {
	if (empty ( $sokw ) || empty ( $string ))
		return $string;
	$badString = array (
			'~',
			'!',
			'@',
			'#',
			'$',
			'%',
			'^',
			'&',
			'*',
			'(',
			')',
			'-',
			'+',
			'[',
			']',
			':',
			';',
			'\'',
			'"',
			'|',
			'\\',
			',',
			'.',
			'?',
			'/',
			'<',
			'>' 
	);
	$sokw = str_replace ( $badString, ' ', $sokw );
	$sokw = preg_replace ( '/\s+/', '|', $sokw );
	return preg_replace ( "/($sokw)/", '<font color="red">\\1</font>', $string );
}



/** 
 * 字符串截取函数
 * 
 * @param String $string 待截取字符串
 * @param Integer $sublen 截取长度
 * @param Integer $start 开始位置
 * @param String $code 字符编码
 *
 **/
function subtitle($string, $sublen, $start = 0, $code = 'UTF-8') 
{ 
    if($code == 'UTF-8') 
    { 
        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/"; 
        preg_match_all($pa, $string, $t_string); 

        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."..."; 
        return join('', array_slice($t_string[0], $start, $sublen)); 
    } 
    else 
    { 
        $start = $start*2; 
        $sublen = $sublen*2; 
        $strlen = strlen($string); 
        $tmpstr = ''; 

        for($i=0; $i< $strlen; $i++) 
        { 
            if($i>=$start && $i< ($start+$sublen)) 
            { 
                if(ord(substr($string, $i, 1))>129) 
                { 
                    $tmpstr.= substr($string, $i, 2); 
                } 
                else 
                { 
                    $tmpstr.= substr($string, $i, 1); 
                } 
            } 
            if(ord(substr($string, $i, 1))>129) $i++; 
        } 
        if(strlen($tmpstr)< $strlen ) $tmpstr.= "..."; 
        return $tmpstr; 
    } 
} 


/**
 * 根据时间参数，计算距离现在过了多长时间
 *
 * @param Integer $time 时间戳
 * @return String $timeStr 距离现在多长时间的字符串
 * @author webdd
 */
function timeToNow($time) {
	$now = time ();
	$old = $time;
	$date = floor ( ($now - $old) / 86400 );
	$hour = floor ( ($now - $old) % 86400 / 3600 );
	$minute = floor ( ($now - $old) % 86400 % 3600 / 60 );
	$second = floor ( ($now - $old) % 86400 % 60 );
	// echo "天" . $date . "时" . $hour . "分" . $minute . '秒' . $second . '<br />';
	// $timeArr = array('day'=>$date,'hour'=>$hour,'minute'=>$minute,'second'=>$second);
	if ($date != 0) {
		return $date . '天以前';
	} else if ($hour != 0) {
		return $hour . '小时以前';
	} else if ($minute != 0) {
		return $minute . '分钟以前';
	} else {
		return $second . '秒以前';
	}
	
}