<?php 
/**
 * 系统邮件发送函数
 * @param string $to    接收邮件者邮箱
 * @param string $name  接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body    邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 */
function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){
	$Config = D ("Config");
	$mail_server = $Config->where("varname = 'mail_server'")->getField("value");
	$mail_port = $Config->where("varname = 'mail_port'")->getField("value");
	$mail_from = $Config->where("varname = 'mail_from'")->getField("value");
	$mail_user = $Config->where("varname = 'mail_user'")->getField("value");
	$mail_password = $Config->where("varname = 'mail_password'")->getField("value");
	
	vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
	$mail             = new \Vendor\PHPMailer(); //PHPMailer对象
	$mail->CharSet    = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
	$mail->IsSMTP();  // 设定使用SMTP服务
	$mail->SMTPDebug  = 0;                     // 关闭SMTP调试功能
	// 1 = errors and messages
	// 2 = messages only
	$mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能

	$mail->Host       = $mail_server;  // SMTP 服务器
	$mail->Port       = $mail_port;  // SMTP服务器的端口号
	if($mail_port != 25){
		$mail->SMTPSecure = 'ssl';  			// 使用安全协议
	}
	$mail->Username   = $mail_from;  // SMTP服务器用户名
	$mail->Password   = $mail_password;  // SMTP服务器密码 
	$mail->SetFrom($mail_from, $mail_user); 
	$replyEmail       = $mail_from; 
	$replyName        = $mail_user; 
	$mail->AddReplyTo($replyEmail, $replyName); 
	$mail->Subject    = $subject;
	$mail->MsgHTML($body);
	$mail->AddAddress($to, $name);
	if(is_array($attachment)){ // 添加附件
		foreach ($attachment as $file){
			is_file($file) && $mail->AddAttachment($file);
		}
	}
	return $mail->Send() ? true : $mail->ErrorInfo;
}


/**
 * 对字符串进行加密
 * 
 * @param string $str 需要加密的内容
 * @param string $key 秘钥
 */
function passport_encrypt($str, $key = "e8network") { // 加密函数
	srand ( ( double ) microtime () * 1000000 );
	$encrypt_key = md5 ( rand ( 0, 32000 ) );
	$ctr = 0;
	$tmp = '';
	for($i = 0; $i < strlen ( $str ); $i ++) {
		$ctr = $ctr == strlen ( $encrypt_key ) ? 0 : $ctr;
		$tmp .= $encrypt_key [$ctr] . ($str [$i] ^ $encrypt_key [$ctr ++]);
	}
	return base64_encode ( passport_key ( $tmp, $key ) );
}

/**
 * 对加密的字符串进行解密
 *
 * @param string $str 需要解密的密文
 * @param string $key 秘钥
 */
function passport_decrypt($str, $key = "e8network") { // 解密函数
	$str = passport_key ( base64_decode ( $str ), $key );
	$tmp = '';
	for($i = 0; $i < strlen ( $str ); $i ++) {
		$md5 = $str [$i];
		$tmp .= $str [++ $i] ^ $md5;
	}
	return $tmp;
}

/**
 * 加密辅助函数
 */
function passport_key($str, $encrypt_key) {
	$encrypt_key = md5 ( $encrypt_key );
	$ctr = 0;
	$tmp = '';
	for($i = 0; $i < strlen ( $str ); $i ++) {
		$ctr = $ctr == strlen ( $encrypt_key ) ? 0 : $ctr;
		$tmp .= $str [$i] ^ $encrypt_key [$ctr ++];
	}
	return $tmp;
}


/**
 * 判断字符串和密文是否一致
 *
 * @param string $val 真实值
 * @param string $mw 密文
 */
function compare($val,$mw) {
	$mw = passport_decrypt($mw);
	if ($val === $mw) return true;
	return false;
}



//导入Excel
function importExecl($file){ 
        if(!file_exists($file)){ 
            return array("error"=>0,'message'=>'file not found!');
        } 
        Vendor("PHPExcel.PHPExcel.IOFactory"); 
        $objReader = PHPExcel_IOFactory::createReader('Excel5'); 
        try{
            $PHPReader = $objReader->load($file);
        }catch(Exception $e){}
        if(!isset($PHPReader)) return array("error"=>0,'message'=>'read error!');
        $allWorksheets = $PHPReader->getAllSheets();
        $i = 0;
        foreach($allWorksheets as $objWorksheet){
            $sheetname=$objWorksheet->getTitle();
            $allRow = $objWorksheet->getHighestRow();//how many rows
            $highestColumn = $objWorksheet->getHighestColumn();//how many columns
            $allColumn = PHPExcel_Cell::columnIndexFromString($highestColumn);
            $array[$i]["Title"] = $sheetname; 
            $array[$i]["Cols"] = $allColumn; 
            $array[$i]["Rows"] = $allRow; 
            $arr = array();
            $isMergeCell = array();
            foreach ($objWorksheet->getMergeCells() as $cells) {//merge cells
                foreach (PHPExcel_Cell::extractAllCellReferencesInRange($cells) as $cellReference) {
                    $isMergeCell[$cellReference] = true;
                }
            }
            for($currentRow = 1 ;$currentRow<=$allRow;$currentRow++){ 
                $row = array(); 
                for($currentColumn=0;$currentColumn<$allColumn;$currentColumn++){;                
                    $cell =$objWorksheet->getCellByColumnAndRow($currentColumn, $currentRow);
                    $afCol = PHPExcel_Cell::stringFromColumnIndex($currentColumn+1);
                    $bfCol = PHPExcel_Cell::stringFromColumnIndex($currentColumn-1);
                    $col = PHPExcel_Cell::stringFromColumnIndex($currentColumn);
                    $address = $col.$currentRow;
                    $value = $objWorksheet->getCell($address)->getValue();
                    if(substr($value,0,1)=='='){
                        return array("error"=>0,'message'=>'can not use the formula!');
                        exit;
                    }
/*                    if($cell->getDataType()==PHPExcel_Cell_DataType::TYPE_NUMERIC){
                        $cellstyleformat=$cell->getParent()->getStyle( $cell->getCoordinate() )->getNumberFormat();
                        $formatcode=$cellstyleformat->getFormatCode();
                        if (preg_match('/^([$[A-Z]*-[0-9A-F]*])*[hmsdy]/i', $formatcode)) {
                            $value=gmdate("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($value));
                        }else{
                            $value=PHPExcel_Style_NumberFormat::toFormattedString($value,$formatcode);
                        }                
                    }*/
                    if($isMergeCell[$col.$currentRow]&&$isMergeCell[$afCol.$currentRow]&&!empty($value)){
                        $temp = $value;
                    }elseif($isMergeCell[$col.$currentRow]&&$isMergeCell[$col.($currentRow-1)]&&empty($value)){
                        $value=$arr[$currentRow-1][$currentColumn];
                    }elseif($isMergeCell[$col.$currentRow]&&$isMergeCell[$bfCol.$currentRow]&&empty($value)){
                        $value=$temp;
                    }
                    $row[$currentColumn] = $value; 
                } 
                $arr[$currentRow] = $row; 
            } 
            $array[$i]["Content"] = $arr; 
            $i++;
        } 
        //spl_autoload_register(array('Think','autoload'));//must, resolve ThinkPHP and PHPExcel conflicts
        unset($objWorksheet); 
        unset($PHPReader); 
        unset($PHPExcel); 
        unlink($file); 
        return array("error"=>1,"data"=>$array); 
    }

?>